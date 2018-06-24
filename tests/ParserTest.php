<?php

require_once __DIR__.'/../vendor/autoload.php';


use App\Glorf;


class ParserTest extends PHPUnit_Framework_TestCase
{
    public function test_example(){

        $Glorf = new Glorf();
        foreach ($Glorf->parse() as $value) {
       		$this->assertTrue(is_string($value->title));
       		$this->assertTrue(is_string($value->url));
       		$this->assertTrue(is_array($value->tags));

    	}
    }
}

?>
