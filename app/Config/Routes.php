<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('StudentPlanning', 'StudentPlanning::index');
$routes->get('StudentPlanning', 'StudentPlanning::pages');
$routes->get('StudentPlanning/profile', 'StudentPlanning::profile');

