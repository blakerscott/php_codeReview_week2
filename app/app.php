<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__."/../src/RepeatCounter.php";

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get("/", function() use ($app) {
	return $app['twig']->render('home.html.twig');
	});

	$app->get('/result', function() use ($app) {
	  $new_counter = new RepeatCounter;
		$new_input = $new_counter->CountRepeats($_GET['word'],$_GET['sentence']);
	  return $app['twig']->render('result.html.twig', array('result' => $new_input));
	});

	return $app;

?>
