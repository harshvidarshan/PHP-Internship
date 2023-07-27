<?php 
	class fruit
	{
		
		function setname()
		{
			echo "Fruit";
		}
		protected function setfruitt()
		{
			echo "hii";
		}
	}
	class strawberry extends fruit
	{
		function setfruitname()
		{
			echo "strawberry";
		}
	}
	class jackfruit extends fruit
	{
		protected function setfruit()
		{
			echo "hii";
		}
	}

	$apple = new fruit();
	$strawberry = new strawberry();
	$jackfruit = new jackfruit();
	echo $strawberry->setname()."<br/>";
	echo $strawberry->setfruitname()."<br/>";
	// echo $jackfruit->setfruit()."error <br/>";
	echo $jackfruit->setname()."no error <br/>";
	echo $jackfruit->setfruitt()."error";
?>