<?php

	$fp = fopen("text.txt","r");
		fwrite($fp,"[Dima]\r\n");
		$arr = file("text.txt");
		foreach ($arr as $key => $value)
			echo $value."<br>";
	fclose($fp)	
?>