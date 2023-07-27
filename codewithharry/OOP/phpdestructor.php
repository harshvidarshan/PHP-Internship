<?php 
/**
 * 
 */
class Fruit
{
	public $name;
	public $color;
	function __construct($name,$color)
	{
		$this->name=$name;
		$this->color=$color;
	}
	function __destruct()
	{
		echo $this->name.' is '.$this->color;
	}
}
$Apple = new Fruit("Apple","Red");

?>