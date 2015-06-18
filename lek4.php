<?php
// $langs = array(
// 	5 =>'PHP',
// 	'Python',
// 	'Ruby',
// 	'JavaScript',
// 	'html',
// );

// $lents = count($langs);


// for ($i = 0; $i < $lents; $i = $i + 1) { 
	// echo $langs[$i] . '<br>';
// // }

// print_r($langs);
// // var_dump($langs);

// ))))))))))))

$home = array(
	'text' => 'home',
	'href' => 'http://hotline.ua/',
	'target' => '_self' ,
	'title' => 'home page',
);
$contacts = array(
	'text' => 'Contacts',
	'href' => 'http://hotline.ua/',
	'target' => '_blank' ,
	'title' => 'Contacts page',
);
 
$menu = array(
	$home,
	$contacts,
); 

foreach ($menu as $link) { 
	// var_dump($link);
	echo '<a href="'. $link['href'] . '"
			 target="'. $link['target'] . '"
			 title="'. $link['title'] .'"
	>' . $link['text'] . '</a>';
}

// print_r ($menu);





?>