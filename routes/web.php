<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'auth'], function(){
    Route::get('/','TopHeadlinesController@getHeadLinesNews')->name('HeadLinesNews');

    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('renewCountry/{country}', 'TopHeadlinesController@renewCountry'); 
    Route::resource('top-headlines', 'TopHeadlinesController');
    Route::get('/showHeadline/{headline}', 'TopHeadlinesController@showHeadline');

});





Route::resource('sources', 'SourcesController');


Route::get('daily', function(){
    return view('components.daily');
});

/* Route::get('news', function(){
    $endpoint = 'https://newsapi.org/v2/top-headlines?country=de&category=business&apiKey=143f02adc41244c499f8ba76e3cf9964';
    $curl = curl_init($endpoint);
    $data = curl_exec($curl);
    if($data === false){
        echo 'error while downloading news';
    } else {
        if(curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200 ){
            $data = json_decode($data, true);
        }
    }
    curl_close($curl);
}); */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
