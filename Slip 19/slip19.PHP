<?php
	$no=123;
	echo $no;
	$no=strrev($no);

	while(strcmp($no,0))
	{
		$r=$no%10;

		switch($r)
		{
			case 1:echo "One ";break;
			case 2:echo "Two";break;
			case 3:echo "Three ";break;
			case 4:echo "Four ";break;
			case 5:echo "Five ";break;
			case 6:echo "Six ";break;
			case 7:echo "Seven ";break;
			case 8:echo "Eight";break;
			case 9:echo "Nine ";break;
			// case 0:echo "Zero ";break;
		}
	
		$no=$no/10;
	}
?>