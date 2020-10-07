<?php

namespace App\Http\Controllers;

use App\Models\headline;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Collection as SupportCollection;
use stdClass;
use Carbon\Carbon;

class TopHeadlinesController extends Controller
{

    private $data = [];
    protected $sampleObject = '{"source":
                                    {
                                        "id":null,
                                        "name":"Finanzen.net"
                                    },
                                "author":"finanzen.net Redaktion","title":"S&T-Aktie bricht zweistellig ein: Jahresprognose nach Analystenkritik bekräftigt - finanzen.net","description":"Der österreichische IT-Dienstleister S&T hat nach einer kritischen Analystenaussage seine Jahresprognose bestätigt.",
                                "url":"https://www.finanzen.net/nachricht/aktien/q3-34-sehr-gut-34-verlaufen-s-t-aktie-bricht-zweistellig-ein-jahresprognose-nach-analystenkritik-bekraeftigt-9343943",
                                "urlToImage":"https://images.finanzen.net/mediacenter/aaa/firmen/s/sundt-logo001-gr.jpg",
                                "publishedAt":"2020-09-30T07:57:00Z","content":"Um Ihnen die Übersicht über die große Anzahl an Nachrichten, die jeden Tag für ein Unternehmen erscheinen, etwas zu erleichtern, haben wir den Nachrichtenfeed in folgende Kategorien aufgeteilt:\r\nRele… [+396 chars]"
                                }';

    /**
    * @Comment renew Country for showing information
    */
    public function renewCountry($country, Request $request){
        $request->session()->put('country', $country);
        return response()->json(200);
    }


    
    /**
     * @comment transform received data into collection
     */
    public function transformIntoCollection($datas) {
        $data = [];
        // return Collect($datas->articles);
        foreach ($datas->articles as $key => $article) {
            # code...
            $headline = new headline;
            $article = (Object) $article;
            $source = (Object) $article->source;
            $formattedDate = Carbon::parse($article->publishedAt)->diffForHumans(); //new \DateTime($article->publishedAt);
            $headline->fill([
                'id'                => $source->id, 
                'name'              => $source->name, 
                'author'            => $article->author,
                'title'             => $article->title,
                'description'       => $article->description, 
                'url'               => $article->url, 
                'urlToImage'        => $article->urlToImage ?? Null,
                'publishedAt'       => $formattedDate,
                'content'           => $article->content,
                'source'            => $article->source
            ]);
            $data[$key] = $headline;
        }
        $this->data = $data;
        return $data;
    }



    /**
     * @redirect to welcome page
     * @comment display most recent news  
     * 
     */                            
    public function getHeadLinesNews(Request $request){
        # define end point

        #fetch data
        $datas = $this->getDataFromEndpoint($request);
        $data = $this->transformIntoCollection($datas);
        // dd($data);
        # storing data into session
        $request->session()->put('headLinesData', $data);
        #   Most recent saved breaking news
        $heads = headline::latest()->take(3)->get();
     
        $curCountry = is_null($request->session()->get('country')) ? 'France' : $request->session()->get('country');   
        
        return view('headlines', compact('data','heads','curCountry'));
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $data = $this->transformIntoCollection($this->getDataFromEndpoint($request));
        
        $class = 'info';
        
/* 
        $data = headline::all();
        $class = 'success'; */
        return view('components.breaking', compact('data','class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        headline::create($request->all());
        
        $class = 'success';
        // return view('components.breaking', compact('data','class'));

        #fetch data
        $data = $this->transformIntoCollection($this->getDataFromEndpoint($request));
        

        #   Most recent saved breaking news
        $heads = headline::latest()->take(3)->get();
        //dd($head, headline::all());
        $curCountry = is_null($request->session()->get('country')) ? 'France' : $request->session()->get('country');   
        
        return redirect()->route('HeadLinesNews', compact('data','heads', 'curCountry'));   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($article,Request $request)
    { 
        $sample = ($request->session()->get('headLinesData'))[$article];

        return view('components.sample-news', compact('sample'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showHeadline($article,Request $request)
    { 
        $headline = headline::find($article); 

        return view('components.sample-headline-news', compact('headline'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
