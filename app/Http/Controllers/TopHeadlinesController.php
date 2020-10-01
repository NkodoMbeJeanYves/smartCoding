<?php

namespace App\Http\Controllers;

use App\Models\headline;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use stdClass;

class TopHeadlinesController extends Controller
{

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
     * @redirect to welcome page
     * @comment display most recent news  
     * 
     */                            
    public function getHeadLinesNews(Request $request){
        # define end point
        $endpoint = $this->getEndpointBreakingNews();

        #fetch data
        $datas = $this->getDataFromEndpoint($request, $endpoint);
        // $datas = (object) json_decode(file_get_contents('data.json'));
        
        foreach ($datas->articles as $key => $article) {
            # code...
            $headline = new headline;
            $article = (Object) $article;
            $source = (Object) $article->source;
            $d = new \DateTime($article->publishedAt);
            $headline->fill([
                'id'                => $source->id, 
                'name'              => $source->name, 
                'author'            => $article->author,
                'title'             => $article->title,
                'description'       => $article->description, 
                'url'               => $article->url, 
                'urlToImage'        => $article->urlToImage,
                'publishedAt'       => $d,
                'content'           => $article->content,
                'source'            => $article->source
            ]);
            $data[$key] = $headline;
        }

        #   Most recent saved breaking news
        $head = headline::latest()->first();
        //dd($head, headline::all());
        
           
        return view('headlines', compact('data','head'));
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $data = $this->getDataFromEndpoint($request);
        $class = $data->status == 'ok' ? 'info' : 'warning';

        /* if ($data->status == 'ok'){
            $class = 'info';
        } else {
            $class = 'warning';
        } */

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
        headline::create($request->all());
        dd(0);
        $data = headline::all();
        $class = 'success';
        return view('components.breaking', compact('data','class'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
