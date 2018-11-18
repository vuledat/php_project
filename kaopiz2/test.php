<?php
class Student
{
	var $id;
	var $name;
	
	function __construct($var1, $var2)
	{
		$this->id =$var1;
		$this->name =$var2;
	}

	function setId($value){
		$this ->id = $value;
	}
	function setName($value){
		$this ->name = $value;
	}

function getId(){
		return $this ->id;
	}

function getName(){
		return $this ->name;
	}


}
$st = new Student(1,'Dat');
echo $st->getId()." ".$st->getName();

?>