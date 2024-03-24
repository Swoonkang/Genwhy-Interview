$routes->get('/users', 'Users::index');
$routes->get('/users/create', 'Users::create');
$routes->post('/users', 'Users::store');
$routes->get('/users/edit/(:num)', 'Users::edit/$1');
$routes->put('/users/(:num)', 'Users::update/$1');
$routes->delete('/users/(:num)', 'Users::delete/$1');