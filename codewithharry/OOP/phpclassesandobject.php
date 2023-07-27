<?php

 	class codinglanguages 
 {
 		public $name;
 		public $toolname;
 		function getlang($name)
 		{
 			$this->name=$name;
 		}
 		function setlang()
 		{
 			return $this->name;
 		}

 		function gettoolname($toolname)
 		{
 			$this->toolname=$toolname;
 		}
 		function settoolname()
 		{
 			return $this->toolname;
 		}
 	}
 	$PHP = new codinglanguages();
 	$PHP->getlang('PHP');
 	echo $PHP->setlang()."<br/>";

 	if($PHP->setlang()=="PHP")
 	{
 		$PHP->gettoolname('SUBLIMETEXT');
 		echo $PHP->settoolname();
    }
    echo "<br/>".var_dump($PHP instanceof codinglanguages)."<br/>";
   // echo var_dump($APPLE instanceof codinglanguages); will return false as $apple is not object that belongs to codinglanguages() class
?>