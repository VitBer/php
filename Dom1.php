<?php

echo date('H');
echo '<br>';
if (date('H') >= 6 and date('H') <= 12){
	echo 'Good morning!';
} elseif (date('H') > 12 and date('H') <= 18){
	echo 'Good afternoon!';
} elseif (date('H') > 18 and date('H') <= 22){
   	echo 'Good evening!';
// } elseif (date('H') > 22 and date('H') <= 23){
// 	echo 'Good night!';
// } elseif (date('H') >= 0 and date('H') < 6){
// 	echo 'Good night!';
} else {
	echo 'Good night!';
}

?>