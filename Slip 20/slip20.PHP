<?php
	$a="this is slip20 a e i o u";
	$va=0;
	$ve=0;
	$vi=0;
	$vo=0;
	$vu=0;
	$i=0;

	for($i=0;$i<strlen($a);$i++)
	{
		if($a[$i]=='a')
			$va++;
		if($a[$i]=='e')
			$ve++;
		if($a[$i]=='i')
			$vi++;
		if($a[$i]=='o')
			$vo++;
		if($a[$i]=='u')
			$vu++;
	}

	echo "count of a $va</br>\n";
	echo "count of e $ve</br>\n";
	echo "count of i $vi</br>\n";
	echo "count of o $vo</br>\n";
	echo "count of u $vu</br>\n";

	$t= $va+$ve+$vi+$vo+$vu;

	echo "Total $t</br>\n";
?>