<?php

use Slim\Http\Request;
use Slim\Http\Response;

require "../bootstrap.php";


// $app->group('/admin', function () use ($app) {

//     $app->get('/login', function () {
//         echo 'login';
//     });
// });


// $app->get('/update/{id}', function (Request $request, Response $response, array $args) {
//     dd($args);
// });

$app->get('/', 'app\controllers\HomeController:index');
$app->get('/user/update/{id}', 'app\controllers\UserController:update');
$app->get('/contato', 'app\controllers\ContatoController:index');
$app->get('/posts', 'app\controllers\PostsController:index');
$app->post('/user/subscribe', 'app\controllers\SubscribeController:store');

$app->run();
