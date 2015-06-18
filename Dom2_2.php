<?php

// $masiv = range('0', '100');

for ($i=0; $i<=100; $i = $i+1) {
	
	if ($i > 25 and $i < 75) {
		continue;
	}

	echo $i . '<br>';
	
	// if ($i>=75) {
	// 	echo $i . '<br>';
	// 	}	

}


?>