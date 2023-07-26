<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

return static function (RouteBuilder $routes) {
    //Forma de definir as rotas da aplicação usando connect
    // 1 Parametro define a URI
    // 2 Parametro define o Controller
    // 3 Parametro define o Metodo no Controller
    // 4 Parametro define o Opções como metodo de comunicação [GET, POST, PUT, DELETE], nome da Rota e paramentros passados para o Controller

    // $routes->connect('/', ['controller' => 'Home', 'action' => 'index'], ['_name' => 'home.index'])->setMethods(['GET']);
    // $routes->connect('/about', ['controller' => 'About', 'action' => 'index'], ['_name' => 'about.index'])->setMethods(['POST', 'GET']);
    // $routes->connect('/product/{id}', ['controller' => 'Product', 'action' => 'show'], ['_name' => 'product.show', 'pass' => ['id', 'name'], 'id' => '[0-9]+', 'name' => '[a-z]+'])->setMethods(['POST', 'GET']);

    //Forma de definir as rotas da aplicação usando os Metodos como [GET, POST, DELETE e PUT]
    // $routes->get('/', ['controller' => 'Home', 'action' => 'index'], 'home.index');
    // $routes->get('/about', ['controller' => 'About', 'action' => 'index'], 'about.index');
    // $routes->get('/product/{id}', ['controller' => 'Product', 'action' => 'show'], 'product.show',)->setPatterns(['id' => '[0-9]+', 'name' => '[a-z]+']);

    //O Uso de *  faça com que tudo que passe após a URI seja parametros 
    // $routes->connect('/clube/*', ['controller' => 'Clube', 'action' => 'index']);

    //O Uso de **  faça com que tudo que passe após a URI seja parametro porem em um unica String 
    // $routes->connect('/clube/**', ['controller' => 'Clube', 'action' => 'index']);

    $routes->setRouteClass(DashedRoute::class);

    // Agrupar rotaas
    $routes->scope('/', function (RouteBuilder $routes) {
        $routes->connect('/', ['controller' => 'Home', 'action' => 'index'], ['_name' => 'home.index'])->setMethods(['GET']);
        $routes->connect('/about', ['controller' => 'About', 'action' => 'index'], ['_name' => 'about.index'])->setMethods(['POST', 'GET']);
        $routes->connect('/product/{id}', ['controller' => 'Product', 'action' => 'show'], ['_name' => 'product.show', 'pass' => ['id', 'name'], 'id' => '[0-9]+', 'name' => '[a-z]+'])->setMethods(['POST', 'GET']);
    });

    // Agrupar rotaas
    $routes->scope('/admin', function (RouteBuilder $routes) {
        $routes->connect('/', ['controller' => 'Admin', 'action' => 'index'], ['_name' => 'admin.index'])->setMethods(['GET']);
        $routes->connect('/users', ['controller' => 'AdminUsers', 'action' => 'index'], ['_name' => 'adminusers.index'])->setMethods(['GET']);
        $routes->connect('/users/{id}', ['controller' => 'AdminUsers', 'action' => 'show'], ['_name' => 'adminusers.show', 'pass' => ['id'], 'id' => '[0-9]+'])->setMethods(['GET']);
    });

    //Caso não enconre nem uma rota 
    $routes->fallbacks();
};
