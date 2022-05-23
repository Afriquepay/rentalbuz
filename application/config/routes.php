<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//this part is for the admin url path match
$route['admin/signin'] = 'Admin/signInPage';
$route['admin/signup'] = 'Admin/signUpPage';
$route['admin/dashboard'] = 'Admin/dashboardPage';

//Authentication route for users 
$route['admin/processlogin']['post'] = 'Admin/processlogin';
$route['admin/logout']['post'] = 'Admin/logout';

// This controllers are for the users
$route['admin/create-user']['get'] = 'Admin/createUserPage';
$route['admin/create_user']['post'] = 'Admin/createUser';

$route['admin/manage-user'] = 'Admin/manageUserPage';
$route['admin/edit-user/:num']['get'] = 'Admin/editUserPage';
$route['admin/update_user']['post'] = 'Admin/updateUser';
$route['admin/deleteuser/:num']['get'] = 'Admin/deleteUser';

$route['admin/fund-user']['get'] = 'Admin/fundUserPage';
$route['admin/funduser']['post'] = 'Admin/fundUser';


// This session is for enveloper controllers
$route['admin/manage-envelope-user'] = 'Admin/manageEnvelopeUserPage';
$route['admin/deleteenvuser/:num']['get'] = 'Admin/deleteEnvUser';

$route['admin/manage-envelope'] = 'Admin/manageEnvelopePage';
$route['admin/view-envelope/:num'] = 'Admin/viewEnvelopePage';

//this is for the Escrow
$route['admin/manageescrow'] = 'Admin/manageEscrowPage';
$route['admin/manage-disputed-escrow'] = 'Admin/manageDisputedEscrowPage';
$route['admin/view-escrow/:num']['get'] = 'Admin/viewEscrowPage';
$route['admin/view-escrow/resolve/:num']['get'] = 'Admin/resolve';
$route['admin/view-escrow/review/:num']['get'] = 'Admin/review';


// for the basket controller
$route['admin/manage-basket'] = 'Admin/manageBasketPage';
$route['admin/deletebasket/:num']['get'] = 'Admin/deleteBasket';

$route['admin/fund-basket'] = 'Admin/fundBasketPage';
$route['admin/fundbasket']['post'] = 'Admin/fundBasket';


// this is for wallet controller
$route['admin/manage-transactions']['get'] = 'Admin/manageTransactionsPage';


