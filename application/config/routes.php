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
/* 默认访问路由 */
$route['default_controller'] = 'Home';

/* 登录请求 */
$route['web/login'] = 'web/Login';
$route['web/login/do']['post'] = 'web/Login/do';

/* 退出登录 */
$route['web/logout'] = 'web/Logout';

/* 获取验证码 */
$route['web/show_captcha']['get'] = 'web/Login/show_captcha';

/* 控制台 */
$route['web/dashboard'] = 'web/Dashboard/view';

/* 机构管理 */
$route['web/org_mgt/college'] = 'web/College/view';
$route['web/org_mgt/add_college'] = 'web/College/add_college';
$route['web/org_mgt/delete_college'] = 'web/College/delete_college';

$route['web/org_mgt/major'] = 'web/Major/view';
$route['web/org_mgt/add_major'] = 'web/Major/add_major';
$route['web/org_mgt/delete_major'] = 'web/Major/delete_major';

$route['web/org_mgt/edu_branch'] = 'web/Edu_branch/view';
$route['web/org_mgt/add_edu_branch'] = 'web/Edu_branch/add_edu_branch';
$route['web/org_mgt/delete_edu_branch'] = 'web/Edu_branch/delete_edu_branch';

$route['api/college/upload_icon']['post'] = 'web/College/icon_upload';

/* 公告管理 */
$route['web/nt_mgt/notice_list'] = 'web/Notice/view';
$route['web/nt_mgt/unreview_list'] = 'web/Notice/unreview';

/* 用户管理 */
$route['web/user_mgt/student'] = 'web/Student/view';
$route['web/user_mgt/add_student'] = 'web/Student/add_student';
$route['web/user_mgt/delete_student'] = 'web/Student/delete_student';

$route['web/user_mgt/teacher'] = 'web/Teacher/view';
$route['web/user_mgt/add_teacher'] = 'web/Teacher/add_teacher';
$route['web/user_mgt/delete_teacher'] = 'web/Teacher/delete_teacher';

$route['web/user_mgt/administrators'] = 'web/Administrators/view';
$route['web/user_mgt/add_administrators'] = 'web/Administrators/add_administrators';
$route['web/user_mgt/delete_administrators'] = 'web/Administrators/delete_administrators';

/* 保留路由 */
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
