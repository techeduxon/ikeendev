<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'User';
$route['404_override'] = '';

$route['Login'] = 'User/Login';
$route['Signup'] = 'User/Signup';
$route['Forgot_password'] = 'User/Forgot_password';
$route['Otp'] = 'User/Otp';
$route['New-password'] = 'User/New_password';
$route['Course/(:any)'] = 'User/Course/$1';
$route['My-Account'] = 'User/My_Account';
$route['Cart'] = 'User/Cart';
$route['Cart/(:any)'] = 'User/Cart/$1';
$route['Checkout'] = 'User/Checkout';
$route['Checkout1'] = 'User/Checkout1';
$route['Edit-Profile'] = 'User/Edit_profile';
$route['Change-Password'] = 'User/Change_password';
$route['Certificates'] = 'User/Certificates';
$route['Exam'] = 'User/Exam';
$route['Exam/(:any)'] = 'User/Exam/$1';
$route['My-Courses'] = 'User/My_courses';
$route['Self-Learning/(:any)'] = 'User/Self_learning/$1';
$route['Live-Classes/(:any)'] = 'User/Live_classes/$1';
$route['Assessments/(:any)'] = 'User/Assessment/$1';
$route['Certificate'] = 'User/Certificate';
$route['Certificate/(:any)'] = 'User/Certificate/$1';
$route['User-About-Us'] = 'User/About_us';
$route['Edu-On'] = 'User/Edu_On';
$route['Leadership'] = 'User/Leadership';
$route['Career'] = 'User/Career';
$route['Gallery'] = 'User/Gallery';
$route['Contact-Us'] = 'User/Contact_us';
$route['Edu-Blog/(:any)'] = 'User/Edu_blog/$1';
$route['Edu-Webinar'] = 'User/Edu_webinar';
$route['Edu-Help'] = 'User/Edu_help';
$route['Reschedule-Policy'] = 'User/Reschedule_policy';
$route['Become-A-Trainer'] = 'User/Become_a_trainer';
$route['Couser-List'] = 'User/Edu_couser_list';
$route['Course-Calender'] = 'User/Edu_course_calender';
$route['Categories'] = 'User/Categories';
$route['Categories-Details'] = 'User/Categories_details';
$route['Categories-Details/(:any)'] = 'User/Categories_details/$1';
$route['Add-New-User/(:any)'] = 'User/AddNewUser/$1';
$route['Add-To-Cart'] = 'User/AddToCart';
$route['Place-Order'] = 'User/PlaceOrder';
$route['Blog-List'] = 'User/Blog';
$route['Blog-view'] = 'User/blogList';

$route['redirect'] = 'User/callback_r';


$route['Corporate-Training'] = 'User/Corporate_training';
$route['Refer-And-Earn'] = 'User/Refer_and_earn';

// $route['State'] = 'Adminpanel/Manage_state';
// $route['City'] = 'Adminpanel/Manage_city';
// $route['City_area'] = 'Adminpanel/Manage_city_area';
// $route['Variant'] = 'Adminpanel/Variant';
// $route['Brand'] = 'Adminpanel/Brand';
// $route['Unit'] = 'Adminpanel/Unit';
// $route['Variant_size'] = 'Adminpanel/Variant_size';
/*---------------------------------Adminpanel----------------------*/

$route['Adminpanel'] = 'Adminpanel/Adminpanel/Login';
$route['check_login'] = 'Adminpanel/Adminpanel/check_login';
$route['Adminpanel'] = 'Adminpanel/Adminpanel/Login';
$route['Logout'] = 'Adminpanel/Adminpanel/Logout';
$route['Adminpanel/index'] = 'Adminpanel/Adminpanel/index';

$route['Courses'] = 'Adminpanel/Adminpanel/Course';
$route['Add-course'] = 'Adminpanel/Adminpanel/Add_course';
$route['View-course'] = 'Adminpanel/Adminpanel/View_course';
$route['Edit-course'] = 'Adminpanel/Adminpanel/Edit_course';
$route['Update-course'] = 'Adminpanel/Adminpanel/Update_course';
$route['View-course-detail'] = 'Adminpanel/Adminpanel/View_course_detail';
$route['Delete_course'] = 'Adminpanel/Adminpanel/Delete_course';
$route['fetch_single_course'] = 'Adminpanel/Adminpanel/fetch_single_course';
$route['update_course'] = 'Adminpanel/Adminpanel/update_course';

$route['Batches'] = 'Adminpanel/Adminpanel/Batches';
$route['Add_batch'] = 'Adminpanel/Adminpanel/Add_batch';
$route['Delete_batch'] = 'Adminpanel/Adminpanel/Delete_batch';
$route['fetch_single_batch'] = 'Adminpanel/Adminpanel/fetch_single_batch';
$route['update_batch'] = 'Adminpanel/Adminpanel/update_batch';

$route['Self-learning'] = 'Adminpanel/Adminpanel/Self_learning';
$route['Add_self_learning'] = 'Adminpanel/Adminpanel/Add_self_learning';
$route['Delete_self_learning'] = 'Adminpanel/Adminpanel/Delete_self_learning';
$route['fetch_single_self_learning'] = 'Adminpanel/Adminpanel/fetch_single_self_learning';
$route['update_self_learning'] = 'Adminpanel/Adminpanel/update_self_learning';

$route['Self-learning-var'] = 'Adminpanel/Adminpanel/Self_learning_var';
$route['Add_self_learning_video'] = 'Adminpanel/Adminpanel/Add_self_learning_video';
$route['Delete_self_learning_video'] = 'Adminpanel/Adminpanel/Delete_self_learning_video';
$route['fetch_single_self_learning_video'] = 'Adminpanel/Adminpanel/fetch_single_self_learning_video';
$route['update_self_learning_video'] = 'Adminpanel/Adminpanel/update_self_learning_video';

$route['Add_self_learning_resources'] = 'Adminpanel/Adminpanel/Add_self_learning_resources';
$route['Delete_self_learning_resources'] = 'Adminpanel/Adminpanel/Delete_self_learning_resources';
$route['fetch_single_self_learning_resources'] = 'Adminpanel/Adminpanel/fetch_single_self_learning_resources';
$route['update_self_learning_resources'] = 'Adminpanel/Adminpanel/update_self_learning_resources';

$route['Live-classes'] = 'Adminpanel/Adminpanel/Live_classes';
$route['Add_live_classes'] = 'Adminpanel/Adminpanel/Add_live_classes';
$route['Delete_live_classes'] = 'Adminpanel/Adminpanel/Delete_live_classes';
$route['fetch_single_live_classes'] = 'Adminpanel/Adminpanel/fetch_single_live_classes';
$route['update_live_classes'] = 'Adminpanel/Adminpanel/update_live_classes';

$route['Assessment'] = 'Adminpanel/Adminpanel/Assessment';
$route['Add_assessment'] = 'Adminpanel/Adminpanel/Add_assessment';
$route['Delete_assessment'] = 'Adminpanel/Adminpanel/Delete_assessment';
$route['fetch_single_assessment'] = 'Adminpanel/Adminpanel/fetch_single_assessment';
$route['update_assessment'] = 'Adminpanel/Adminpanel/update_assessment';

$route['Manage_all'] = 'Adminpanel/Adminpanel/Manage_all';

$route['change_status'] = 'Adminpanel/Adminpanel/change_status';

/*---------------------------------Contant----------------------*/


$route['Category'] = 'Adminpanel/Content/Category';
$route['Add_category'] = 'Adminpanel/Content/Add_category';
$route['Delete_category'] = 'Adminpanel/Content/Delete_category';
$route['fetch_single_category'] = 'Adminpanel/Content/fetch_single_category';
$route['update_category'] = 'Adminpanel/Content/update_category';

$route['SubCategory'] = 'Adminpanel/Content/SubCategory';
$route['Add_subcategory'] = 'Adminpanel/Content/Add_subcategory';
$route['Delete_subcategory'] = 'Adminpanel/Content/Delete_subcategory';
$route['fetch_single_subcategory'] = 'Adminpanel/Content/fetch_single_subcategory';
$route['update_subcategory'] = 'Adminpanel/Content/update_subcategory';

$route['news_and_article'] = 'Adminpanel/Content/news_and_article';
$route['Add_news_and_article'] = 'Adminpanel/Content/Add_news_and_article';
$route['Delete_news_and_article'] = 'Adminpanel/Content/Delete_news_and_article';
$route['fetch_single_news_and_article'] = 'Adminpanel/Content/fetch_single_news_and_article';
$route['update_news_and_article'] = 'Adminpanel/Content/update_news_and_article';

$route['how_tech_work'] = 'Adminpanel/Content/how_tech_work';
$route['Add_how_tech_work'] = 'Adminpanel/Content/Add_how_tech_work';
$route['Delete_how_tech_work'] = 'Adminpanel/Content/Delete_how_tech_work';
$route['fetch_single_how_tech_work'] = 'Adminpanel/Content/fetch_single_how_tech_work';
$route['update_how_tech_work'] = 'Adminpanel/Content/update_how_tech_work';

$route['Abouts'] = 'Adminpanel/Content/About';
$route['Add_about'] = 'Adminpanel/Content/Add_about';
$route['Delete_about'] = 'Adminpanel/Content/Delete_about';
$route['fetch_single_about'] = 'Adminpanel/Content/fetch_single_about';
$route['update_about'] = 'Adminpanel/Content/update_about';

$route['About_journey'] = 'Adminpanel/Content/About_journey';
$route['Add_about_journey'] = 'Adminpanel/Content/Add_about_journey';
$route['Delete_about_journey'] = 'Adminpanel/Content/Delete_about_journey';
$route['fetch_single_about_journey'] = 'Adminpanel/Content/fetch_single_about_journey';
$route['update_about_journey'] = 'Adminpanel/Content/update_about_journey';

$route['Leaderships'] = 'Adminpanel/Content/Leadership';
$route['Add_leadership'] = 'Adminpanel/Content/Add_leadership';
$route['Delete_leadership'] = 'Adminpanel/Content/Delete_leadership';
$route['fetch_single_leadership'] = 'Adminpanel/Content/fetch_single_leadership';
$route['update_leadership'] = 'Adminpanel/Content/update_leadership';



$route['Gallerys'] = 'Adminpanel/Content/Gallery';
$route['Add_gallery'] = 'Adminpanel/Content/Add_gallery';
$route['Delete_gallery'] = 'Adminpanel/Content/Delete_gallery';
$route['fetch_single_gallery'] = 'Adminpanel/Content/fetch_single_gallery';
$route['update_gallery'] = 'Adminpanel/Content/update_gallery';
$route['Blog'] = 'Adminpanel/Blog/index';

$route['Edu_on'] = 'Adminpanel/Content/Edu_on';
$route['Add_edu_on'] = 'Adminpanel/Content/Add_edu_on';
$route['Delete_edu_on'] = 'Adminpanel/Content/Delete_edu_on';
$route['fetch_single_edu_on'] = 'Adminpanel/Content/fetch_single_edu_on';
$route['update_edu_on'] = 'Adminpanel/Content/update_edu_on';
$route['fetch_single_edu_on_sec1'] = 'Adminpanel/Content/fetch_single_edu_on_sec1';
$route['update_edu_on_sec1'] = 'Adminpanel/Content/update_edu_on_sec1';

$route['Edu_help'] = 'Adminpanel/Content/Edu_help';
$route['Add_edu_help'] = 'Adminpanel/Content/Add_edu_help';
$route['Delete_edu_help'] = 'Adminpanel/Content/Delete_edu_help';
$route['fetch_single_edu_help'] = 'Adminpanel/Content/fetch_single_edu_help';
$route['update_edu_help'] = 'Adminpanel/Content/update_edu_help';

$route['Edu_help_det'] = 'Adminpanel/Content/Edu_help_det';
$route['Add_edu_help_det'] = 'Adminpanel/Content/Add_edu_help_det';
$route['Delete_edu_help_det'] = 'Adminpanel/Content/Delete_edu_help_det';
$route['fetch_single_edu_help_det'] = 'Adminpanel/Content/fetch_single_edu_help_det';
$route['update_edu_help_det'] = 'Adminpanel/Content/update_edu_help_det';

$route['Course_list'] = 'Adminpanel/Content/Course_list';
$route['Add_course_list'] = 'Adminpanel/Content/Add_course_list';
$route['Delete_course_list'] = 'Adminpanel/Content/Delete_course_list';
$route['fetch_single_course_list'] = 'Adminpanel/Content/fetch_single_course_list';
$route['update_course_list'] = 'Adminpanel/Content/update_course_list';

$route['Edu_course_list_det'] = 'Adminpanel/Content/Edu_course_list_det';
$route['Add_course_list_det'] = 'Adminpanel/Content/Add_course_list_det';
$route['Delete_course_list_det'] = 'Adminpanel/Content/Delete_course_list_det';
$route['fetch_single_course_list_det'] = 'Adminpanel/Content/fetch_single_course_list_det';
$route['update_course_list_det'] = 'Adminpanel/Content/update_course_list_det';

$route['Edu_course_list_det_det'] = 'Adminpanel/Content/Edu_course_list_det_det';
$route['Add_course_list_det_det'] = 'Adminpanel/Content/Add_course_list_det_det';
$route['Delete_course_list_det_det'] = 'Adminpanel/Content/Delete_course_list_det_det';
$route['fetch_single_course_list_det_det'] = 'Adminpanel/Content/fetch_single_course_list_det_det';
$route['update_course_list_det_det'] = 'Adminpanel/Content/update_course_list_det_det';

$route['Edu_webinar'] = 'Adminpanel/Content/Edu_webinar';
$route['Add_edu_webinar'] = 'Adminpanel/Content/Add_edu_webinar';
$route['Delete_edu_webinar'] = 'Adminpanel/Content/Delete_edu_webinar';
$route['fetch_single_edu_webinar'] = 'Adminpanel/Content/fetch_single_edu_webinar';
$route['update_edu_webinar'] = 'Adminpanel/Content/update_edu_webinar';
$route['Course_Calender'] = 'Adminpanel/Blog/Course_Calender';

$route['Reschedule'] = 'Adminpanel/Content/Reschedule';
$route['Add_reschedule'] = 'Adminpanel/Content/Add_reschedule';
$route['Delete_reschedule'] = 'Adminpanel/Content/Delete_reschedule';
$route['fetch_single_reschedule'] = 'Adminpanel/Content/fetch_single_reschedule';
$route['update_reschedule'] = 'Adminpanel/Content/update_reschedule';

$route['Reschedule_det'] = 'Adminpanel/Content/Reschedule_det';
$route['Add_reschedule_det'] = 'Adminpanel/Content/Add_reschedule_det';
$route['Delete_reschedule_det'] = 'Adminpanel/Content/Delete_reschedule_det';
$route['fetch_single_reschedule_det'] = 'Adminpanel/Content/fetch_single_reschedule_det';
$route['update_reschedule_det'] = 'Adminpanel/Content/update_reschedule_det';
$route['Header'] = 'Adminpanel/Content/Header';
$route['Update-Header'] = 'Adminpanel/Content/Update_Header';
$route['Below-Header'] = 'Adminpanel/Content/Below_Header';
$route['Update-Header-Below'] = 'Adminpanel/Content/Update_Below_Header';
$route['How-The-Techeduxon'] = 'Adminpanel/Content/How_The_Techeduxon';
$route['Update-How-The-Techeduxon'] = 'Adminpanel/Content/Update_How_The_Techeduxon';
$route['Below-Counter-Section'] = 'Adminpanel/Content/Below_Counter_Section';
$route['Home_counter'] = 'Adminpanel/Content/Home_counter';

$route['Testimonial'] = 'Adminpanel/Content/Testimonial';
$route['Enquiry_contact'] = 'Adminpanel/Content/Enquiry_contact';
$route['Footer_content'] = 'Adminpanel/Content/Footer_content';
$route['Learner_list'] = 'Adminpanel/Content/Learner_list';
$route['Trainer_list'] = 'Adminpanel/Content/Trainer_list';
$route['Login_content'] = 'Adminpanel/Content/Login_content';
$route['Signup_content'] = 'Adminpanel/Content/Signup_content';
$route['googleresponse'] = 'Google_login/login';
$route['forgot-password'] = 'Adminpanel/Adminpanel/Forget_password';
$route['verify-otp'] = 'Adminpanel/Adminpanel/verify_otp';
$route['change-password'] = 'Adminpanel/Adminpanel/change_password';
