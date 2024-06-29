<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'StudentPlanning::login');
$routes->get('/register', 'StudentPlanning::register');
$routes->get('StudentPlanning', 'StudentPlanning::index');
$routes->get('StudentPlanning', 'StudentPlanning::pages');
$routes->get('StudentPlanning/profile', 'StudentPlanning::profile');

$routes->get('sidebar/(:any)', 'SidebarController::index/$1');


