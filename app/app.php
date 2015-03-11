<?php
    require_once __DIR__ .'/../vendor/autoload.php';
    require_once __DIR__ .'/../src/Game.php';
    require_once __DIR__ .'/../src/GameSingle.php';



    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));




    $app->get('/', function() use ($app) {
            return $app['twig']->render("home.twig");

    });

    $app->post('/singlePlayer', function() use ($app) {
            return $app['twig']->render("singlePlayer.twig");

    });
    $app->post('/singleplay', function() use ($app) {
             $new_Game = new GameSingle;
             $computor_move= $new_Game->PlayRandom();
             $person_move= $_POST['input1'];
             $GameResult = $new_Game->PlayGame($person_move,$computor_move );

            return $app['twig']->render("singleplay.twig", array("result" =>$GameResult, "computer"=> $computor_move,"you"=> $person_move));

    });

    $app->post('/TwoPlayer', function() use ($app) {


            return $app['twig']->render("twoplayers.twig");

    });


    $app->post('/TwoPlayerResult', function() use ($app) {
             $new_Game = new Game;
             $person1_move = $_POST['input1'];
             $person2_move= $_POST['input2'];
             $GameResult = $new_Game->PlayGame($person1_move,$person2_move );

            return $app['twig']->render("twoplayer.twig", array("result" =>$GameResult, "player1"=> $person1_move, "player2"=> $person2_move));

    });


    return $app;
?>
