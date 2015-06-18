
<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<meta charset="UTF-8"> 
	<title>Document</title> 
	<style>
	.blok_privet 
   	{
    border: 4px double black; /* Параметры границы */
    background: LemonChiffon; /* Цвет фона */
    padding: 20px;  /*Поля вокруг текста*/ 
    text-align: center;
    margin: 20%; /* Отступ */
   	}
   	.good_af
   	{
   	color: green;
   	font-size: 30px;
   	}
  	</style>
</head> 

<body> 
	<div class="blok_privet">
		<?php

		echo date('H');
		echo '<br>';
		if (date('H') >= 6 and date('H') <= 12){
			echo 'Good morning!';
		} elseif (date('H') > 12 and date('H') <= 18){
			echo '<p class="good_af">Good afternoon!</p>';
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
	</div>
</body> 
</html>