<?php 
echo "interface is used to implement methods";
echo "<br/>";
echo "example";
interface Animal
{
	public function makeSound();
}
class Dog implements Animal
{
	public function makeSound()
	{
		echo "dog sound";
	}
}
class Cat implements Animal
{
	public function makeSound()
	{
		echo "Cat sound";
	}
}
// $array = ["cat","dog"];
// foreach ($array as $key => $value) {
// 	$obj = new $array();
// 	$obj->makeSound()."<br/>";
// } //wrong method

$dog = new dog();
$cat = new cat();

$obj = array($dog,$cat);
foreach($obj as $key)
{
	 $key->makeSound();
}
?>