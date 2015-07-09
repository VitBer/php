<?php

class PostController
{
    public function indexAction (\Silex\Application $app)
    {
        $conn =  $app['db'];
        $posts = $conn->fetchAll("SELECT * FROM posts");

        print_r($posts);

        return 'My blog';
    }
    public function showAction(\Silex\Application $app, $id)
    {
        $conn =  $app['db'];
        $post = $conn->fetchAssoc("SELECT * FROM posts WHERE id = ?", array((int) $id));

//        print_r($post);

        return $app['twig']->render('post/shwo.twig', array (
            'post' => $post,
        ));
    }
}