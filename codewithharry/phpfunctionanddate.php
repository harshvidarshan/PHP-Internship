<?php 
//functions
//built in and user defined

//user defined function to calculate total marks and % of student named harshvi and jinkal
function totalmarks($marksofharshvi)
{
	$sum=0;
	$i=0;
	while($i<count($marksofharshvi))
	{
	$sum = $sum + $marksofharshvi[$i];
	$i++;
	}
	return $sum;
}
function permarks($marksofharshvi)
{
	$sum=0;
	$i=0;
	while($i<count($marksofharshvi))
	{
	$sum = $sum + $marksofharshvi[$i];
	$i++;
	}
	return $sum/count($marksofharshvi);
}
$marksofharshvi = array(99,98,79,98,95);
echo "total marks of harshvi is ".totalmarks($marksofharshvi)."<br/>"."and % is ".permarks($marksofharshvi);
//3 examples for date and its functions
echo "<br/>";
$date = date("dS M Y H:i:s")."<br/>";
$today = date('H:i:s');
echo "Today is ".$date;
echo "Today is ".$today;
// set the default timezone to use.
date_default_timezone_set('UTC');
echo "<br/>";

// Prints something like: Monday
echo date("l");
echo "<br/>";
// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');
echo "<br/>";
// Prints: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo "<br/>";
/* use the constants in the format parameter */
// prints something like: Wed, 25 Sep 2013 15:28:57 -0700
echo date(DATE_RFC2822);
echo "<br/>";
// prints something like: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
echo "<br/>";

//associative array and multidimensional array

//to associate something associate array is used
$assocarray =  array('hi' => 'green', 'your birthday' => 'is on 9th' , 'maam birthday'=> 19);
foreach($assocarray as $key => $value)
{
	echo $key;
	echo "--";
	echo $value;
	echo "<br/>";
}
//3d array
//5*4
$multarray = 
array(
	array(1,4,5,9),
	array(5,7,8,9),
	array(98,3,4,6),
	array(1,23,56,87),
	array(98,97,87,76)
);
for($i=0;$i<5;$i++)
{

	for($j=0;$j<4;$j++)
	{

		echo $multarray[$i][$j]."|";
	}
	echo "<br/>";
}
//3 dimensional
echo "<br/>";
$multthreearray = array
(array(
	array(90,98,97),
	array(45,98,89),
	array(34,98,90)
));
// for($i=0;$i<3;$i++)
// {
// 	for($j=0;$j<3;$j++)
// 	{
// 		for($k=0;$k<3;$k++)
// 		{
// 			echo $multthreearray[$i][$j][$k]."|";
// 		}
// 		echo "<br/>";
// 	}
// 	echo "<br/>";
// }

//global local and scope of variable
$a=98;//global
function globalorlocal()
{
	global $a;
	$b=100; //local variable
	echo $a."--".$b;
}
echo $a."prints global variable";
echo "<br>";
globalorlocal()."prints local variable inside function";

echo var_dump($GLOBALS);//superclass global variable
?>