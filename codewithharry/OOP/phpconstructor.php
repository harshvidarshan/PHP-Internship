<?php 

class Fruit
{
	public $name;
	public $color;
	function __construct($name,$color)
	{
		$this->name=$name;
		$this->color=$color;
	}
	function getname()
	{
		return $this->name;
	}
	function getcolor()
	{
		return $this->color;
	}
}
$Apple = new Fruit("Apple","Red");
echo "fruit details ".$Apple->getname().$Apple->getcolor();
?>