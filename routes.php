<?php

$router->get('/ecommerce', [\App\Controller\HomeController::class,'aboutPage']);
$router->get('/ecommerce/about', [\App\Controller\HomeController::class,'aboutPage']);

/*$router->get('/login', [\App\Controller\HomeController::class, 'showLogin']);
$router->post('/login', [\App\Controller\HomeController::class, 'processLogin']);*/