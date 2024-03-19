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
$route['default_controller'] = 'Home';
$route['home'] = 'Home/index';
$route['rnd-tax-credit'] = 'Home/rnd_tax_credit';
$route['qualifying-sectors'] = 'Home/qualifying_sectors';
$route['about-us'] = 'Home/about_us';
$route['contact'] = 'Home/contact_us';
$route['privacy-policy'] = 'Home/privacy_policy';
$route['terms-conditions'] = 'Home/terms_conditions';
$route['complaints-procedure'] = 'Home/complaints_procedure';
// -------------------------Useful Info Pages------------------
$route['check-eligibility'] = 'Home/check_eligibility';
$route['the-process'] = 'Home/the_process';
$route['rnd-faq'] = 'Home/rnd_faq';
// -----------------------Qualifying Sectors Pages-------------
$route['science-and-medications'] = 'Home/science_n_medications';
$route['agriculture'] = 'Home/agriculture';
$route['architecture'] = 'Home/architecture';
$route['construction-industry'] = 'Home/construction_industry';
$route['hospitality'] = 'Home/hospitality';
$route['food-and-drink'] = 'Home/food_n_drink';
$route['manufacturing'] = 'Home/manufacturing';
$route['it-software'] = 'Home/it_software';
$route['care-home'] = 'Home/care_home';
$route['homepage'] = 'Home/homepage';
$route['translate_uri_dashes'] = FALSE;
// ----------------Qualify Form------------------
$route['qualifying-form'] = 'Home/qualify_form';
