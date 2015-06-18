<?php

$menu = array(
array(
'text' => 'Home',
'link' => '#home',
'is_blank' => false,
),
array(
'text' => 'Contacts',
'link' => '#contacts',
'is_blank' => false,
),
array(
'text' => 'About',
'link' => '#about',
'is_blank' => false,
),
array(
'text' => 'PHP',
'link' => 'http://php.net/',
'is_blank' => true,
),
);

?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<meta charset="UTF-8" > 
	<title>Document</title> 
</head> 
<body>
	<ul>
		<?php foreach ($menu as $link) : ?>
			<li>
				<a href="<?= $link['link'] ?>"
		 		target="<?= $link['is_blank'] ?>"
		 		>
		 			<?= $link['text'] ?>
		 		</a>
		 	</li>
		<?php endforeach ?>
	</ul>
</body> 
</html>