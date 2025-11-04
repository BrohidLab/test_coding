<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'BukuTamuController::index');
$routes->post('bukutamu/simpan', 'BukuTamuController::simpan');
$routes->get('admin', 'AdminController::index');
$routes->get('admin/exportCsv', 'AdminController::exportCsv');