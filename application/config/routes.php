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

/* 工单管理 */
$route['web/order_mgt'] = 'web/Order_mgt/view';
$route['web/order_mgt/pass_apply'] = 'web/Order_mgt/pass_apply';
$route['web/order_mgt/unpass_apply'] = 'web/Order_mgt/unpass_apply';
$route['web/order_mgt/delete_apply'] = 'web/Order_mgt/delete_apply';

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
$route['web/nt_mgt/delete_notice'] = 'web/Notice/delete_notice';
$route['web/nt_mgt/unreview_list'] = 'web/Notice/unreview';
$route['web/nt_mgt/pass_notice'] = 'web/Notice/pass_notice';
$route['web/nt_mgt/unpass_notice'] = 'web/Notice/unpass_notice';

/*信息工单审核*/

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

/*******************   APP请求路由  ************************/
$route['app/student/login'] = 'app/Student/login';
$route['app/student/getStudentByCM'] = 'app/Student/get_stu_by_college_major';
$route['app/student/getStudentById'] = 'app/Student/get_stu_by_id';
$route['app/student/updateStudentInfo'] = 'app/Student/update_stu_info';
$route['app/teacher/login'] = 'app/Teacher/login';
$route['app/teacher/getTeacherByCM'] = 'app/Teacher/get_tea_by_college_major';
$route['app/teacher/getTeacherById'] = 'app/Teacher/get_tea_by_id';
$route['app/teacher/updateTeacherInfo'] = 'app/Teacher/update_tea_info';
$route['app/college/getCollege'] = 'app/College/get_college';
$route['app/eduBranch/getEduBranch'] = 'app/Edu_branch/get_branch';
$route['app/major/getMajorByCollege'] = 'app/Major/get_major_by_college';
$route['app/role/getRole'] = 'app/role/get_role';
$route['app/apply/saveApply'] = 'app/apply/save_apply';
$route['app/apply/getApply'] = 'app/apply/get_apply';
$route['app/feedback/saveFeedback'] = 'app/feedback/save_feedback';
$route['app/nt_mgt/save_notice'] = 'app/Notice/save_notice';
$route['app/nt_mgt/get_notice'] = 'app/Notice/get_notice';
$route['app/nt_mgt/get_notice_by_id'] = 'app/Notice/get_notice_by_id';

/* 保留路由 */
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
