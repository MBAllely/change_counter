<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    	'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get('/results', function() use ($app) {
        $anagram = new Anagram();
        $result = $anagram->anagramSort($_GET['input'], $_GET['compare_input']);
        return $app['twig']->render('results.html.twig', array('answer' => $result));
    });


    return $app;
?>
