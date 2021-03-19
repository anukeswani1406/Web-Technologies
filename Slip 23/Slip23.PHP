<?php
	$n=$_GET['no'];

	for($i=1;$i<=$n;$i++)
	{
		if($i%2==0)
			echo "<font size=12 color=red>".$i."</br>";
		else
			echo "<font size=17 color=yellow face=Times new Roman>".$i."</br>";
	}
?>