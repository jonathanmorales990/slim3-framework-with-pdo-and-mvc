<?php 

namespace app\models;

class employeer {

	private $name;

	function __construct($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}
}

?>