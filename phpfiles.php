<?php 
	//echo readfile("files.txt");
	$fptr= fopen("files.txt","r");
	$fread = fread("files.txt", "r");
	echo $fread;
?>