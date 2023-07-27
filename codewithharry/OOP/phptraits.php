<?php
// traits are used to access multiple methods of multiple classes supports
// multiple traits
trait hi
{
	public function msg()
	{
		echo "hi msg";
	}
	public function msg2()
	{
		echo "hi msg2";
	}
}
trait hi2
{
	protected function msg2()
	{
		echo "hi2 msg";
	}
	public function hi2msg2()
	{
		echo "hi2 msg";
	}
}
class welcome1
{
	use hi;
}
class welcome2
{
	use hi2;
} 
$obj1 = new welcome1();
$obj1->msg();
$obj1->msg2();
$obj2 = new welcome2();
// $obj2->msg2(); will show error as it is protected
$obj2->hi2msg2();
?>