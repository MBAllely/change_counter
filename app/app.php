<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Coins.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    	'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get('/results', function() use ($app) {
        $new_coins = new Coins($_GET['input']);
        return $app['twig']->render('results.html.twig', array('answer' => $new_coins));
    });


    return $app;
?>
