<?php

$router->get('/', 'MainController');
$router->get('/test', 'TestController');
$router->get('/access', 'AccessController');
$router->get('/admin', 'AdminController');

$router->post('/', 'PostMainController');
$router->post('/test', 'PostTestController');
$router->post('/access', 'PostAccessController');
$router->post('/admin', 'PostAdminController');

$router->put('/', 'PutMainController');
$router->put('/test', 'PutTestController');
$router->put('/access', 'PutAccessController');
$router->put('/admin', 'PutAdminController');


$router->patch('/', 'PatchMainController');
$router->patch('/test', 'PatchTestController');
$router->patch('/access', 'PatchAccessController');
$router->patch('/admin', 'PatchAdminController');

$router->delete('/', 'DeleteMainController');
$router->delete('/test', 'DeleteTestController');
$router->delete('/access', 'DeleteAccessController');
$router->delete('/admin', 'DeleteAdminController');

