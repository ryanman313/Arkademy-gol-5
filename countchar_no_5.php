<?php 
	$text="arkademy";
	$cari_huruf="a";
	$count="0";
	for ($i=0; $i <strlen($text) ; $i++) { 
		if (substr($text,$i,1)==$cari_huruf) {
			$count=$count+1;
		}
	}
	echo $count."\n";
	echo "<br>";
	$text="javascript";
	$cari_huruf="x";
	$count="0";
	for ($i=0; $i <strlen($text) ; $i++) { 
		if (substr($text,$i,1)==$cari_huruf) {
			$count=$count+1;
		}
	}
	echo $count."\n";
 ?>