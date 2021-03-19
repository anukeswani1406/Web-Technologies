<?php
	$a=array("a"=>"red","b"=>"green","c"=>"blue");
	echo "Original Stack </br>";
	print_r($a);
	echo "</br>";

	echo "insert an element in Stack </br>";
	array_push($a,"black");
	print_r($a);
	echo "</br>";

	echo "Delete an element from Stack </br>";
	array_pop($a);
	print_r($a);
	echo "</br>";
	echo "</br>";

	echo "insert an element in Queue </br>";
	array_push($a,"yellow");
	print_r($a);
	echo "</br>";
	echo "</br>";

	echo "Delete an element in Queue </br>";
	echo array_shift($a);
	print_r ($a);
?>