<?php

class DataController extends \BaseController {

    private $content_string;
    public function __construct(){
        
       $this->content_string = File::get("acronyms.txt");

        
    }
    
    public function getIndex() {
        die('hello');
    }
    
    public function getData($limit = 20) {
        
        $content_array = explode("\n", $this->content_string);
        
        $keys = array_rand($content_array, $limit);
        
        foreach($keys as $key){
            $content = $content_array[$key];
            $split = explode(" - ", $content);
            $output[] = array("key"=>$split[0], "value"=>$split[1]);
        }
        
        $response = Response::make(json_encode($output), 200);
        $response->header('Content-Type', "application/json");
        return $response;
        
    }

}

