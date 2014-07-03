<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get("/test", function(){
//   die('asdasda'); 
//});
//
//Route::get('/', function() {
//    try {
//        Solr::setCore('collection1');
//        Solr::setFQ('color' , 'blue*');
//        Solr::outputFormat('json');
//        $results = Solr::getResults();
//        echo print_r($results , true);
//    } catch (Exception $e) {
//        Log::error($e->getMessage());
//        die($e->getMessage() . $e->getTraceAsString());
//    }
//});

/*
 * This route will dynamically create a search string and then display the results
 */
Route::controller('/', 'DataController');
