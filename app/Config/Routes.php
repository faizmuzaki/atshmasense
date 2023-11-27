<?php

use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\Home;
use App\Controllers\UserController;
use App\Controllers\Article;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);


$routes->get('/admin', [AdminController::class, 'index'], ['filter' => 'role:admin']);
$routes->get('/admin/create', [AdminController::class, 'create'], ['filter' => 'role:admin']);
$routes->get('/admin/user/(:any)', [AdminController::class, 'detail'], ['filter' => 'role:admin']);
$routes->put('/admin/user/(:any)', [AdminController::class, 'update'], ['filter' => 'role:admin']);
$routes->get('/admin/disease', [AdminController::class, 'disease'], ['filter' => 'role:admin']);
$routes->post('/admin/disease', [AdminController::class, 'storeDisease'], ['filter' => 'role:admin']);
$routes->get('/admin/disease/(:any)', [AdminController::class, 'show'], ['filter' => 'role:admin']);
$routes->put('/admin/disease/(:any)', [AdminController::class, 'updateDisease'], ['filter' => 'role:admin']);

$routes->get('/admin/symptoms', [AdminController::class, 'symptoms'], ['filter' => 'role:admin']);
$routes->post('/admin/symptoms', [AdminController::class, 'storeSymptoms'], ['filter' => 'role:admin']);
$routes->get('/admin/symptoms/(:any)', [AdminController::class, 'showSymptoms'], ['filter' => 'role:admin']);
$routes->put('/admin/symptoms/(:any)', [AdminController::class, 'updateSymptoms'], ['filter' => 'role:admin']);

$routes->get('/admin/rule', [AdminController::class, 'rule'], ['filter' => 'role:admin']);
$routes->post('/admin/rule', [AdminController::class, 'storeRule'], ['filter' => 'role:admin']);
$routes->get('/admin/show/(:any)', [AdminController::class, 'showRule'], ['filter' => 'role:admin']);
$routes->get('/admin/rule/(:any)/(:any)', [AdminController::class, 'updateRule'], ['filter' => 'role:admin']);
$routes->put('/admin/rule/(:any)', [AdminController::class, 'updatesRule'], ['filter' => 'role:admin']);

$routes->get('/admin/article/create', [AdminController::class, 'createArticle'], ['filter' => 'role:admin']);
$routes->get('/admin/article/(:any)/edit', [AdminController::class, 'editAriticle'], ['filter' => 'role:admin']);
$routes->post('/admin/article', [AdminController::class, 'storeArticle'], ['filter' => 'role:admin']);
$routes->get('/admin/article', [AdminController::class, 'article'], ['filter' => 'role:admin']);
$routes->delete('/admin/article/(:any)', [AdminController::class, 'deleteArticle'], ['filter' => 'role:admin']);
$routes->put('/admin/article/(:any)', [AdminController::class, 'updateArticle'], ['filter' => 'role:admin']);



$routes->get('/user', [UserController::class, 'index'], ['filter' => 'role:user']);
$routes->get('/user/detection', [UserController::class, 'detect'], ['filter' => 'role:user']);
$routes->post('/user/store', [UserController::class, 'store'], ['filter' => 'role:user']);
$routes->get('/user/result', [UserController::class, 'result'], ['filter' => 'role:user']);
$routes->get('/user/history', [UserController::class, 'history'], ['filter' => 'role:user']);
$routes->get('/user/history/(:any)', [UserController::class, 'detail'], ['filter' => 'role:user']);
// $routes->group('api', function ($routes) {
//   $routes->resource('article', ['controller' => 'Article']);
// });
$routes->get('/user/article/', [UserController::class, 'article']);
$routes->post('/user/article/', [UserController::class, 'storeArticle']);

$routes->get('/user/article/(:any)', [UserController::class, 'showArticle']);
$routes->get('/user/article/create', [UserController::class, 'createArticle']);


$routes->get('/api/article', [Article::class, 'index']);
$routes->post('/api/article', [Article::class, 'create']);
$routes->get('/api/article/(:any)', [Article::class, 'show']);
$routes->put('/api/article/(:any)', [Article::class, 'update']);
$routes->delete('/api/article/(:any)', [Article::class, 'delete']);

$routes->get('/login', [AuthController::class, 'login']);
$routes->get('/register', [AuthController::class, 'register']);
$routes->get('/forgot', [AuthController::class, 'forgot']);
$routes->get('/reset-password', [AuthController::class, 'reset']);
