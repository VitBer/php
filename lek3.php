<?php
$langs = array(
	'PHP<br>',
	'Python',
	'Ruby',
	'JavaScript',
	'html',
);

$lents = count($langs);


// for ($i = 0; $i < $lents; $i = $i + 1) { 
// 	echo $langs[$i] . '<br>';
// }
// echo $i;

// echo $lents;

// print_r($langs);
// var_dump($langs);

// foreach ($langs as $lang) {
// 	print $lang . '<br>';
// }

?>

<ul> 
	<?php foreach ($langs as $lang) { ?>
		<li> <?php print $lang ?></li>
	<?php } ?>
</ul>
