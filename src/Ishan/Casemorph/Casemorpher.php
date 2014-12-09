<?php
namespace Ishan\Casemorph;

class Casemorpher {
	
	public static function getSnake($input) {
	  preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
	  $ret = $matches[0];
	  foreach ($ret as &$match) {
	    $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
	  }

	  return implode('_', $ret);
	}

	/**
	*   Converts Camel Cased Keys to Snake Cased Keys
	* 	in an associative array.
	*	
	*   @return array
	*/
	public static function morphCamelToSnake($array) {

		$keys = array_keys($array);

		foreach ($keys as $key ) {

		 	$array[self::getSnake($key)] = $array[$key];
		 	if(self::getSnake($key) != $key) 
		 		unset($array[$key]);
		} 

		return $array;
	}

}