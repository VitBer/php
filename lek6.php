<?php

class Post
{
	private $heading;

	private $content;

	public function __construct()
	{
		$this->heading = 'Untitled';
		$this->content = '';
	}

	public function __toString()
	{
		return $this->heading;
	}

	public function read()
	{
		echo 'Read the "' . $this->heading . '"';
	}

	public function setHeading($heading)
	{
	 	$this->heading = $heading;
	}

	public function getHeading()
	{
		return $this->heading;
	}

	public function setContent($content)
	{
		$this->content = $content;
	}

	public function getContent()
	{
		return $this->content;
	}
}

$post = new Post();

$post->setHeading ('Post 1');
$post->setContent ('JHFGk hdkjfhJKgh HJKHgh jh ksjd fshd fkjk');

$post2 = new Post();
// $post2->heading = 'Post 2';

// // echo '<h1>' . $post->heading . '</h1>';
// // echo '<p>'  . $post->content . '</p>';

// echo $post2->read();

echo $post->getHeading();
echo $post->getContent();


?>