<?php 
class hi
{
	public function hi(iterable $myiterablevariable)
	{
		foreach($myiterablevariable as $myiterablevar)
		{
			echo $myiterablevar;
		}
	}
}
$array = array("a","b","c");
$hiobj = new hi();
$hiobj->hi($array);
?>