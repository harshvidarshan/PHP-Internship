<?php 
class goodbye
{
	const msg = "hihello";
	public function bye()
	{
		echo self::msg;
	}
}

$goodbye = new goodbye();
$goodbye->bye();
// echo goodbye::msg;
?>