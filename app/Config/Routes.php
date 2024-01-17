<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes['default_controller'] = 'Taskcontroller';
$routes->get('/', 'Taskcontroller::Tasks');

$routes->get('/viewGruppennummer','New_controller::viewGruppennummer');
$routes->get('/Spalten','New_controller::Spalten');
$routes->get('/NeueSpalten','New_controller::NeueSpalten');
//$routes->get('/Tasks','Taskcontroller::Tasks');
$routes->get('/NeueTasks','Taskcontroller::NeueTasks');
$routes->post('/Eingabetasks','Taskcontroller::Eingabetasks');
$routes->get('/edit','Taskcontroller::edit');
$routes->get('/update/(:num)','Taskcontroller::update/$1');