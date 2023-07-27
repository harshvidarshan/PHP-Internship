<?php 
//task 1
//if elseif else ladder
// Write a C program to input marks of five subjects Physics, Chemistry, Biology, Mathematics and Computer. Calculate percentage and grade according to following:
// Percentage >= 90% : Grade A
// Percentage >= 80% : Grade B
// Percentage >= 70% : Grade C
// Percentage >= 60% : Grade D
// Percentage >= 40% : Grade E
// Percentage < 40% : Grade F

 $marks =90;
if($marks < 40)
{
	echo "grade f";
}
else if ($marks >= 40 and $marks <=60) {
	echo "grade e";
}
else if ($marks > 60 and $marks <= 70) {
	echo "grade d";
}
else if($marks > 70 and $marks <= 80)
{
	echo "grade c";
}
else if($marks > 80 and $marks < 90)
{
	echo "grade b";
}
else
{
	echo "grade a";
}
//task 2
//driver program
$age = 44;

if($age>=25 and $age<=65)
{
	echo "you can drive";
}
else
{
	echo "sorry";
}

echo "<br/>";
//switch case
$i=45;
switch($i)
{
	case 45:
	echo "hi, your age is 45";
	break;

	case 30:
	echo "hi, your age is 30";
	break;

	case 24:
	echo "hi, your age is 24";
	break;

	default:
	echo "hi, your age is not there";
	break;
}
//while loop
//used when there is more updation
echo "<br/>";
$i=1;
while($i<10)
{
	$i++;
	echo "while loop execution<br/>".$i;
	if($i==5)
	{
		echo "till 5 execution only<br/>".$i;
		break;
	}
}
echo "<br/>";
//for loop
for($i=0;$i<10;$i++)
{
	echo "for loop".$i."<br/> ";
}
//dowhile
//to print one output and then check condition
$i=10;
do
{
	$i++;
	echo "do while loop".$i."<br/>";
}
while($i<=20);

//foreach loops mainly used to fetch array elements with less code
$array = array("apple","banana","strawberry","kiwi","pomogranete","pinneapple","jackfruit","green apple","custard apple");
foreach ($array as $key => $value) {
	echo "key ".$key."value ".$value."<br/>";
}
?>