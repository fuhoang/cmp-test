<?php

namespace App;

class Flub{
    public function parse(){

    	$data = yaml_parse_file(__DIR__ . "/../feed-exports/flub.yaml");
    	if(!empty($data)){
	    	foreach ($data as $value) {
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
            echo 'Importing: ' . (array_key_exists("name", $value) ? $value['name'] : null) . '; Url: ' . (array_key_exists("url", $value) ? $value['url'] : null) .'; Tags: '. (array_key_exists("labels", $value) ? $value['labels'] : null);
            echo "\r\n";
        }
    }
}
?>