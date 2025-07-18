<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('dunia', 'halodunia::halodunia');

$routes->get('/form', 'FormController::index');
$routes->post('/form/submit', 'FormController::submit');
$routes->get('/form/views_dataMahasiswa', 'FormController::data');
$routes->get('/latihanview', 'HelloWorld::index');
$routes->get('/skills', 'PagesController::skills');

$routes->get('/crud', 'Crud::index');
$routes->match(['get', 'post'], '/crud/tambah', 'Crud::tambah');
$routes->get('/crud/hapus/(:segment)', 'Crud::hapus/$1');
$routes->get('/crud/edit/(:segment)', 'Crud::edit/$1');
$routes->post('/crud/editan', 'Crud::editan');