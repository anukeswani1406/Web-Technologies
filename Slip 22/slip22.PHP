<?php
	$st1="this is wt slip 22";
	$st2="i";

	echo "First occurance of $st2 is ";
	echo strpos($st1,$st2);
	echo "\n";

	echo "last occurance of $st2 is ";
	echo strrpos($st1,$st2);
	echo "\n";

	echo " Count of $st2 in $st1 is ";
	echo substr_count($st1,$st2);
	echo "\n";

	echo " Replacement of $st2 in $st1 is ";
	echo str_replace($st2,"x",$st1);
?>