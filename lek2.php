<?php

// 1 Вариант

// $name = 'Vitalii';
// if (false){
// 	echo 'Hello ' . $name; // 
// } else {
//     echo 'Hello User';
// }

// echo "<br>";
//2 Вариант 

// $name = 'Vitalii';
// if (isset($name)){
// 	echo 'Hello ' . $name;
// } else {
//     echo 'Hello User';
// }

// echo "<br>";
// 3 Вариант

// $name = 'Vitalii';
// if ($name == 'Vitalii'){
// 	echo 'Hello Administrator';
// } elseif ($name == '') {
// 	echo 'Hello unknown';
// } else {
//     echo 'Hello' . $name;
// }

// echo "<br>";

// 4 Вариант
// $name = '';
// if (isset($name)) {

// 	if ($name == 'Vitalii'){
// 		echo 'Hello Administrator';
// 	} elseif ($name == '') {
// 		echo 'Hello unknown';
// 	} else {
//     	echo 'Hello' . $name;
// 	}
// } else {
// 	echo 'Hello! You are not authenticate';
// }

// 5 Вариант

// echo "<br>";

// $name = 'Vital';

// if (isset($name) and $name === 'Vitalii'){
// 	echo 'Hello Administrator';
// } elseif (isset($name) and $name === '') {
// 	echo 'Hello unknown';
// } elseif (isset($name)){
//    	echo 'Hello' . $name;
// } else {
// 	echo 'Hello! You are not authenticate';
// }

echo date('H');

?>
