<?php

namespace App;

class Glorf{
    public function parse(){

    	$data = json_decode(file_get_contents(__DIR__ . "/../feed-exports/glorf.json"));
    	if(!empty($data)){
	    	foreach ($data->videos as $value) {
	    		$array[] = $value;
	    	}
	    	return $array;
    	}
        return null;
    }

    public function getDocument(){

    	$response = $this->parse();
    	if(is_null($response)){
    		return null;
    	}
    	foreach ($response as $value) {
    		$tags = implode(' ', $value->tags);
    		echo 'Importing: ' . $value->title . '; Url: ' . $value->url .'; Tags: '. $tags;
    		echo "\r\n";
    	}   	
    }
}

?>
