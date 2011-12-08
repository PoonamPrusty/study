<?php
        $dbh = new PDO('mysql:dbname=guestbook;host=localhost;charset=utf-8;','root','');
    
	$sql="INSERT INTO `check`_`try`(`ID`,`NAME`)VALUES(\'1\',\abc'\');";
	$dbh->prepare($sql)->execute();
	$v="SELECT * FROM `try`";
	$dbh->prepare($v)->execute();
	$var="INSERT INTO `check`_`try`(`NAME`)VALUES(\'def\');";
	$dbh->prepare($var)->execute();
	
	
