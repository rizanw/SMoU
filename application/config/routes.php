<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['moua'] = 'm_moua';
$route['moua/add'] = 'm_moua/add';
$route['moua/edit'] = 'm_moua/edit';
$route['moua/edit/(:num)'] = 'm_moua/edit/$1';
$route['moua/remove'] = 'm_moua/remove';
$route['moua/remove/(:num)'] = 'm_moua/remove/$1';

$route['partner'] = 'm_partner';
$route['partner/add'] = 'm_partner/add';
$route['partner/edit'] = 'm_partner/edit';
$route['partner/edit/(:num)'] = 'm_partner/edit/$1';
$route['partner/remove'] = 'm_partner/remove';
$route['partner/remove/(:num)'] = 'm_partner/remove/$1';

$route['mutual'] = 'm_mutual';
$route['mutual/add'] = 'm_mutual/add';
$route['mutual/edit'] = 'm_mutual/edit';
$route['mutual/edit/(:num)'] = 'm_mutual/edit/$1';
$route['mutual/remove'] = 'm_mutual/remove';
$route['mutual/remove/(:num)'] = 'm_mutual/remove/$1';

$route['contact'] = 'm_contact';
$route['contact/add'] = 'm_contact/add';
$route['contact/edit'] = 'm_contact/edit';
$route['contact/edit/(:num)'] = 'm_contact/edit/$1';
$route['contact/remove'] = 'm_contact/remove';
$route['contact/remove/(:num)'] = 'm_contact/remove/$1';

$route['place'] = 'm_place';
$route['place/add'] = 'm_place/add';
$route['place/edit'] = 'm_place/edit';
$route['place/edit/(:num)'] = 'm_place/edit/$1';
$route['place/remove'] = 'm_place/remove';
$route['place/remove/(:num)'] = 'm_place/remove/$1';


/*********** USER DEFINED ROUTES *******************/

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";

$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";
$route['login-history'] = "user/loginHistoy";
$route['login-history/(:num)'] = "user/loginHistoy/$1";
$route['login-history/(:num)/(:num)'] = "user/loginHistoy/$1/$2";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";
