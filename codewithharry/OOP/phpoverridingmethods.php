<?php 
//overrride methods
class fruit
{
	public $fname;
	function __construct($fname)
	{
		$this->fname = $fname;
	}
	public function intro()
	{
		echo "fruit class intro function";
	}
    function getname()
	{
		return $this->fname;
	}
}
class jackfruit extends fruit
{
	public function intro()
	{
		echo "jackfruit class intro function";
	}
}
$apple = new fruit("Apple");
$apple->getname()."apple getname method".'<br/>'; //error
$jackfruit = new fruit("jackfruit");
$jackfruit->intro()."jackfruit intro function br/>";
$apple->intro()."apple intro function <br/>";
?>