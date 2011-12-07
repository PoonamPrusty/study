<?php
	$a=123;
	$b=345;
	$c=789;
	if ($a==$b)
		echo "match";
	elseif(($a==$c)||($b==$c))
		echo "match found";
	else 
		echo "match not found";
	for($i=0;$i<5;$i++){
		echo $i;}
	do{ 
		echo "yes";$a++; }while($a<125);
	$x=array("X","Y");
	foreach($x as $key =>$val){
		echo $val;}
