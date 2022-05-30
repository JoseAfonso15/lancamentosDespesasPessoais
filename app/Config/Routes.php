<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Main');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Main::index');
$filter=['filter' => 'auth'];
$routes->add('login', 'Main::login');
$routes->add('logout', 'Main::logout');
$routes->add('autentica', 'Autentica::index');
$routes->add('dashboard', 'Main::dashboard',$filter);
$routes->add('fornecedor/lista', 'FornecedorController::index',$filter);
$routes->add('fornecedor/add', 'FornecedorController::add',$filter);
$routes->add('fornecedor/edit', 'FornecedorController::edit',$filter);
$routes->add('despesa/lista', 'DespesaController::index',$filter);
$routes->add('despesa/add', 'DespesaController::add',$filter);
$routes->add('despesa/edit', 'DespesaController::edit',$filter);
$routes->add('despesa/buscaFornecedorDespesa', 'DespesaController::buscaFornecedorDespesa',$filter);
 

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
