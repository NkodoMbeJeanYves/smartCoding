<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use stdClass;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

        private $endpoint = 'https://newsapi.org/';
        
    

        public function getDataFromEndpoint(Request $request, $Endpoint = null): stdClass{
            $news_api_key = env('NEWS_API_KEY');
            
            $endpoint = is_null($Endpoint) ? $this->getEndpointBreakingNews(): $Endpoint;
            # process of query string
            /* ==>Country
            # ae ar at au be bg br ca ch 
            # cn co cu cz de eg fr gb gr 
            # hk hu id ie il in it jp kr 
            # lt lv ma mx my ng nl no nz 
            # ph pl pt ro rs ru sa se sg 
            # si sk th tr tw ua us ve za
            */
            if($request->has('country')){
                $endpoint .= 'country='.$request->has('country').'&';
            }
    $endpoint .= 'country=fr&';
            /*  ==>Category
            #   business 
            #   entertainment 
            #   general 
            #   health 
            #   science 
            #   sports 
            #   technology
            */
            if($request->has('category')){
                $endpoint .= 'category='.$request->has('category').'&';
            }
    
    
            /**
             * q Keywords or a phrase to search for.
             */
            if($request->has('q')){
                $endpoint .= 'q='.$request->has('q').'&';
            }
    
            /**
             * language
             */
            if($request->has('language')){
                $endpoint .= 'language='.$request->has('language').'&';
            }
    
    
            /**
             * sources
             */
            if($request->has('sources')){
                $endpoint .= 'sources='.$request->has('sources').'&';
            }
    
    
            /**
             * pageSize int
             * @comment The number of results to return per page (request). 
             * 20 is the default, 100 is the maximum.
             */
            if($request->has('pageSize')){
                $endpoint .= 'pageSize='.$request->has('pageSize').'&';
            }
    
            /**
             * page int
             * @comment Use this to page through the results 
             * if the total results found is greater than the page size
             */
            if($request->has('page')){
                $endpoint .= 'page='.$request->has('page').'&';
            }
    
            $endpoint .= 'apiKey='.$news_api_key;
    
            # endpoint is ready to be fetch
            return $this->fetchData($endpoint);
            
            
        }



    public function fetchData(string $endpoint): stdClass{
        //  Initiate curl session
        $handle = curl_init();
        // Will return the response, if false it prints the response
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($handle, CURLOPT_URL, $endpoint);
        // Execute the session and store the contents in $result
        $result = curl_exec($handle);
        // Closing the session
        curl_close($handle);

        $data = (object) json_decode($result, true);
        return $data;
    }


    public function getEndpointBreakingNews(){
        return $this->endpoint.'v2/top-headlines?';
    }


    public function getEndpointRecentNews(){
        return $this->endpoint.'/v2/everything';
    }


    public function getEndpointSubset(){
        return $this->endpoint.'/v2/sources';
    }
}
