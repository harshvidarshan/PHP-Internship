<?php

// echo "static variables example, can be called directly without calling instance of class(without making object)";
// class value
// {
// public static $pi = 3.14444444;
// }
// echo value::$pi;

// class harsh
// {
// 	public static $hg = 90802;
// }
// echo harsh::$hg;

// second example
// class firstclass
// {
// 	static $a = 98;
// 	public static function firstfunction()
// 	{
// 		echo "harshvi";
// 	}
// }
// class secondclass extends firstclass
// {
// 	public function secondfunction()
// 	{
// 		firstclass::firstfunction();
		
// 	}
// 	// firstclass::$a;
// }
// $obj2 = new secondclass();
// $obj2->secondfunction();
// firstclass::$a;

// third example
class myclass
{

	protected static function hello()
	{
		echo "hi";
	}
}
class secondclass extends myclass
{
	public $name;
	public function hellosecondclass()//no require to add static keyword
	{
		$this->name = parent::hello(); //instead of myclass use parent keyword to fetch data
	}
}
$nameobj = new secondclass();
$nameobj->hellosecondclass();
?>