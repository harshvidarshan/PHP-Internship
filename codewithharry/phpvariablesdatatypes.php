<?php 
//variables
echo "hi <br/>";
//KEYWORDS ARE NOT CASE SENSITIVE
/*rules for php
variables 
1)can start with only letter or underscores
2)cannot start with number
3)is CASE SENSITIVE 
*/
$harshvi="I am is good";
echo "$harshvi";
echo "<br/>";
echo "error is upside ".$Harshvi.$hARSHVI;
echo "<br/>";
//datatypes
//integer
$a = 1;
echo $a."is integer";

echo "<br/>";
//float
$b = 1.2323;
echo $b."is float";
echo "<br/>";
//boolean
$b=true;
echo var_dump($b);
echo $b;
echo "<br/>";
//string
echo "hi this is string";
echo "<br/>";
//array
$array = array("hihi","hello");
print_r($array);
echo "<br/>";
echo var_dump($array);
echo "<br/>";
echo $array[0]."first element of string";
echo "<br/>";
//object
//here employee is class and object is harshvi, and her collegues

//null 
$a=null;
echo var_dump($a);
echo "<br/>";
//resource

//string functions
$string = "WELCOME TO CODE BUDDY'S";
$strings = "      jkdfbeocn3l     ";
echo "to find string length function".strlen($string);
echo "<br/>";

echo "string position".strpos($string, "CODE BUDDY'S");

echo "<br/>";

echo "string words count".str_word_count($string);

echo "<br/>";

echo "string reverse".strrev($string);

echo "<br/>";

echo "string replace".str_replace("WELCOME TO", "hi", $string);
echo "<br/>";

echo "string trim".trim($strings);

echo "<br/>";

echo "string rtrim".rtrim($strings);
echo "<br/>";
echo "string ltrim".ltrim($strings);

//operators in php
$a=900;
$b=20;
//assignment
echo $a+=1;
echo "<br/>";
echo $a-=1;
echo "<br/>";
echo $a*=1;
echo "<br/>";
echo $a/=2;
echo "<br/>";
echo $a%=2;
echo "<br/>";
echo $a**=2;
echo "<br/>";
//arithmetic
echo $a+$b;
echo "<br/>";
echo $a-$b;
echo "<br/>";
echo $a*$b;
echo "<br/>";
echo $a/$b;
echo "<br/>";
echo $a%$b;
echo "<br/>";
echo $a**$b;
echo "<br/>";
//logical
//and &&
echo $a&&900;
//or ||
echo var_dump($a or $b);
//not

//comparision
echo $a>$b;
echo "<br/>";
echo var_dump($a<$b);
echo "<br/>";
echo $a>=$b;
echo "<br/>";
echo $a<=$b;
echo "<br/>";
echo $a<>$b;//not equal
echo "<br/>";
echo $a=$b;
echo "<br/>";
echo $a!=$b;
echo "<br/>";
?>