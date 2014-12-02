<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 25/11/14
 * Time: 22:52
 */

require __DIR__.'/../vendor/autoload.php';
$app = new Slim\Slim(array(
    'debug' => true,
    'view' => new \Slim\Mustache\Mustache(),
));

$app->get('/', function() use ($app) {
    // $user->save();
    $app->render('hello.html', array('planet' => 'World!'));
});
$app->run();