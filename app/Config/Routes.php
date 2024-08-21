<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/**
 * The following routes are for the redis test
 */

$routes->get('redis', 'RedisTest::index');