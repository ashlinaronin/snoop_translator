<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/SnoopTranslator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //Routes
    $app->get("/", function() use ($app) {
        return $app['twig']->render('snoop_input.html.twig');
    });

    $app->get("/translate_results", function() use($app) {
        $new_SnoopTranslator = new SnoopTranslator;
        $translatedPhrase = $new_SnoopTranslator->shizzlenate($_GET['phrase']);
        return $app['twig']->render('snoop_results.html.twig', array('result' => $translatedPhrase));
    });

    return $app;

?>
