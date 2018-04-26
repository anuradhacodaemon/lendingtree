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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['auto/'] = 'auto/index';
$route['auto/step2/(:any)'] = 'auto/step2/$1';
$route['auto/step3/(:any)'] = 'auto/step3/$1';

$route['admin'] = 'admin/home/index';
$route['admin/dashboard'] = 'admin/home/dashboard';


$route['admin/user'] = 'admin/admin_user/index';
$route['admin/user/(:num)'] = 'admin/admin_user/index/$1';
$route['admin/user/details/(:num)'] = 'admin/admin_user/details/$1';
$route['admin/user/export'] = 'admin/admin_user/export';

$route['admin/user/mailsent'] = 'admin/admin_user/mailsent';

$route['admin/user/updatestatus'] = 'admin/admin_user/updatestatus';
$route['admin/user/delete_inactive/(:any)'] = 'admin/admin_user/delete_inactive/$1';
$route['admin/user/deleteall'] = 'admin/admin_user/deleteall';

$route['admin/refinance'] = 'admin/admin_refinance/index';
$route['admin/refinance/(:num)'] = 'admin/admin_refinance/index/$1';
$route['admin/refinance/details/(:num)'] = 'admin/admin_refinance/details/$1';
$route['admin/refinance/export'] = 'admin/admin_refinance/export';
$route['admin/refinance/pdfRefinance/(:num)'] = 'admin/admin_refinance/pdfRefinance/$1';
$route['admin/refinance/pdfLoan/(:num)'] = 'admin/admin_refinance/pdfLoan/$1';

$route['admin/refinance/mailsent'] = 'admin/admin_refinance/mailsent';

$route['admin/refinance/updatestatus'] = 'admin/admin_refinance/updatestatus';
$route['admin/refinance/delete_inactive/(:any)'] = 'admin/admin_refinance/delete_inactive/$1';
$route['admin/refinance/deleteall'] = 'admin/admin_refinance/deleteall';