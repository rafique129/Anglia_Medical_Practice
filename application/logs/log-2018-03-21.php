<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-03-21 06:29:54 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\xampp\htdocs\doctor_appointment\system\database\drivers\mysqli\mysqli_driver.php 202
ERROR - 2018-03-21 06:29:54 --> Unable to connect to the database
ERROR - 2018-03-21 06:30:31 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 06:30:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 06:30:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 06:30:31 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 06:30:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 06:30:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 06:36:59 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 06:36:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 06:36:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 06:36:59 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 06:36:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 06:36:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 06:37:02 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 06:37:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 06:37:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 06:37:02 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 06:37:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 06:37:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 06:37:09 --> Query error: Unknown column 'doctor_profile_details.doctor_name/' in 'field list' - Invalid query: SELECT `doctor_availity_data`.*, `doctor_profile_details`.`doctor_name/`
FROM `doctor_availity_data`
LEFT JOIN `doctor_profile_details` ON `doctor_profile_details`.`id`=`doctor_availity_data`.`doctor_id`
ERROR - 2018-03-21 06:39:49 --> Query error: Unknown column 'doctor_profile_details.doctor_name/' in 'field list' - Invalid query: SELECT `doctor_availity_data`.*, `doctor_profile_details`.`doctor_name/`
FROM `doctor_availity_data`
LEFT JOIN `doctor_profile_details` ON `doctor_profile_details`.`id`=`doctor_availity_data`.`doctor_id`
ERROR - 2018-03-21 06:57:54 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 06:57:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 06:57:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 06:58:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
FROM `doctor_availity_data`
LEFT JOIN `doctor_profile_details` ON `doctor_prof' at line 1 - Invalid query: SELECT `doctor_availity_data`.*, `doctor_profile_details`.`doctor_name`, GROUP_CONCAT(doctor_availity_data.day, `doctor_availity_data`.`avail_time`, doctor_availity_data.end_time/ )
FROM `doctor_availity_data`
LEFT JOIN `doctor_profile_details` ON `doctor_profile_details`.`id`=`doctor_availity_data`.`doctor_id`
ERROR - 2018-03-21 07:01:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
FROM `doctor_availity_data`
LEFT JOIN `doctor_profile_details` ON `doctor_prof' at line 1 - Invalid query: SELECT `doctor_availity_data`.*, `doctor_profile_details`.`doctor_name`, GROUP_CONCAT(doctor_availity_data.day, `doctor_availity_data`.`avail_time`, doctor_availity_data.end_time/ )
FROM `doctor_availity_data`
LEFT JOIN `doctor_profile_details` ON `doctor_profile_details`.`id`=`doctor_availity_data`.`doctor_id`
ERROR - 2018-03-21 07:01:21 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:01:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:01:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:01:44 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:01:44 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:01:44 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:03:54 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:03:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:03:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:03:54 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:03:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:03:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:08:26 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:08:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:08:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:09:00 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:09:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:09:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:15:26 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:15:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:15:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:16:16 --> 404 Page Not Found: Uploads/admin
ERROR - 2018-03-21 07:16:16 --> 404 Page Not Found: Uploads/admin
ERROR - 2018-03-21 07:17:04 --> 404 Page Not Found: Uploads/admin
ERROR - 2018-03-21 07:17:04 --> 404 Page Not Found: Uploads/admin
ERROR - 2018-03-21 07:25:47 --> Severity: Notice --> Undefined variable: yoga_detail_retreat C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 42
ERROR - 2018-03-21 07:25:47 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 42
ERROR - 2018-03-21 07:40:02 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:40:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:40:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:40:02 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:40:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:40:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:41:04 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:41:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:41:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:41:04 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:41:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:41:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:43:58 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:43:58 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:43:58 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:43:58 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:43:58 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:43:58 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:47:33 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:47:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:47:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:47:33 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:47:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:47:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:47:33 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:47:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:47:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:48:30 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:48:30 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:48:30 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:48:30 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:48:30 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:48:30 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:48:30 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:48:30 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:48:30 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:48:45 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:48:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:48:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:48:45 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:48:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:48:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:48:45 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:48:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:48:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:48:59 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:48:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:48:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:48:59 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:48:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:48:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:48:59 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:48:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:48:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:49:07 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:49:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:49:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:49:07 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:49:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:49:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:49:07 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:49:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:49:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:49:25 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:49:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:49:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:49:25 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:49:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:49:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:49:25 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:49:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:49:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 07:49:34 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 07:54:23 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 07:55:02 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 07:55:27 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 07:55:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 07:55:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:03:44 --> Severity: Notice --> Undefined index: 11:00:00 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 110
ERROR - 2018-03-21 08:03:44 --> Severity: Notice --> Undefined index: 13:30:00 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 110
ERROR - 2018-03-21 08:07:16 --> Severity: Notice --> Undefined index: 10:00:00 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 114
ERROR - 2018-03-21 08:11:54 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:11:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:11:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:12:24 --> Severity: Notice --> Undefined index: Wednesday C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 86
ERROR - 2018-03-21 08:12:24 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:12:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:12:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:12:24 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:12:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:12:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:12:55 --> Severity: Notice --> Undefined index: Wednesday C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 86
ERROR - 2018-03-21 08:12:55 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:12:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:12:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:12:55 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:12:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:12:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:12:59 --> Severity: Notice --> Undefined index: Thursday C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 86
ERROR - 2018-03-21 08:12:59 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:12:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:12:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:12:59 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:12:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:12:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:13:28 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:13:28 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:13:28 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:13:28 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:13:28 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:13:28 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:13:30 --> Severity: Notice --> Undefined index: 08:00:00 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 110
ERROR - 2018-03-21 08:13:30 --> Severity: Notice --> Undefined index: 09:30:00 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 110
ERROR - 2018-03-21 08:14:58 --> Severity: Notice --> Undefined index: 08:00:00 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 110
ERROR - 2018-03-21 08:14:58 --> Severity: Notice --> Undefined index: 09:30:00 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 110
ERROR - 2018-03-21 08:16:19 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:16:19 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:16:19 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:16:19 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:16:19 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:16:19 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:17:08 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:17:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:17:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:17:08 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:17:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:17:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:17:15 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:17:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:17:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:17:15 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:17:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:17:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:18:26 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:18:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:18:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:18:26 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:18:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:18:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:19:44 --> Severity: Parsing Error --> syntax error, unexpected end of file C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-add.php 164
ERROR - 2018-03-21 08:20:12 --> Severity: Notice --> Undefined index: doctor_id C:\xampp\htdocs\doctor_appointment\application\controllers\Manage_department.php 311
ERROR - 2018-03-21 08:20:12 --> Query error: Column 'doctor_id' cannot be null - Invalid query: INSERT INTO `doctor_availity_data` (`doctor_id`, `day`, `avail_time`, `end_time`) VALUES (NULL, '0', '8:30', '9:00')
ERROR - 2018-03-21 08:20:39 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:20:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:20:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:20:39 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:20:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:20:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:20:48 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:20:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:20:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:20:48 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:20:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:20:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:23:54 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:23:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:23:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:23:54 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:23:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:23:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:24:17 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:24:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:24:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:24:17 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:24:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:24:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:24:21 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:24:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:24:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:24:21 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:24:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:24:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:24:23 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:24:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:24:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:24:23 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:24:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:24:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:24:55 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:24:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:24:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:24:55 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:24:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:24:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:26:17 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:26:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:26:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:26:17 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:26:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:26:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:26:21 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:26:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:26:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:26:21 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:26:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:26:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:26:44 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:26:44 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:26:44 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:26:44 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:26:44 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:26:44 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:27:00 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:27:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:27:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:27:00 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:27:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:27:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:27:02 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 75
ERROR - 2018-03-21 08:27:02 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 75
ERROR - 2018-03-21 08:27:10 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:27:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:27:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:27:10 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:27:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:27:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:27:26 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:27:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:27:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:27:26 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:27:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:27:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:27:31 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:27:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:27:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:27:31 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:27:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:27:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:27:38 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:27:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:27:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:27:38 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:27:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:27:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:28:36 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:28:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:28:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:28:36 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:28:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:28:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:30:21 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:30:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:30:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:30:21 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:30:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:30:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:32:26 --> Severity: Notice --> Undefined variable: editid C:\xampp\htdocs\doctor_appointment\application\controllers\Manage_department.php 406
ERROR - 2018-03-21 08:32:26 --> Severity: Notice --> Undefined variable: selectdayvalue C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 126
ERROR - 2018-03-21 08:32:26 --> Severity: Notice --> Undefined variable: selectdayvalue C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 126
ERROR - 2018-03-21 08:32:44 --> Severity: Notice --> Undefined variable: editid C:\xampp\htdocs\doctor_appointment\application\controllers\Manage_department.php 406
ERROR - 2018-03-21 08:33:05 --> Severity: Notice --> Undefined variable: updatedata C:\xampp\htdocs\doctor_appointment\application\controllers\Manage_department.php 411
ERROR - 2018-03-21 08:34:51 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:34:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:34:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:34:51 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:34:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:34:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:35:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:35:50 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:35:50 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:35:50 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:35:50 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:35:50 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:35:50 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:35:55 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:35:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:35:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:35:55 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:35:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:35:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:35:57 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:35:57 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:35:57 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:35:57 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:35:57 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:35:57 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:36:00 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:36:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:36:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:36:00 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:36:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:36:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:36:25 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:36:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:36:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:36:25 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 08:36:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 08:36:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 08:42:59 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 51
ERROR - 2018-03-21 08:43:27 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 08:44:19 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 08:44:44 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 08:56:28 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 08:58:45 --> Severity: Parsing Error --> syntax error, unexpected end of file C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 165
ERROR - 2018-03-21 08:59:56 --> Severity: Error --> Maximum execution time of 60 seconds exceeded C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 94
ERROR - 2018-03-21 09:01:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 94
ERROR - 2018-03-21 09:01:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 94
ERROR - 2018-03-21 09:01:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 94
ERROR - 2018-03-21 09:01:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 94
ERROR - 2018-03-21 09:01:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 94
ERROR - 2018-03-21 09:01:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 94
ERROR - 2018-03-21 09:01:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 94
ERROR - 2018-03-21 09:04:53 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:05:53 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:06:07 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:06:15 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 09:06:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 09:06:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 09:06:15 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 09:06:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 09:06:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 09:06:41 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 09:06:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 09:06:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 09:09:32 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 09:09:32 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 09:09:32 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 09:09:32 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 09:13:02 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 75
ERROR - 2018-03-21 09:13:02 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 75
ERROR - 2018-03-21 09:13:06 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 09:13:06 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 09:13:06 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 09:16:26 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:20:11 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:21:40 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:22:27 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:23:26 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:23:41 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:25:26 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:28:39 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:30:39 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:31:34 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:32:06 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:33:40 --> Severity: Parsing Error --> syntax error, unexpected end of file C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 168
ERROR - 2018-03-21 09:34:11 --> Severity: Parsing Error --> syntax error, unexpected end of file C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 167
ERROR - 2018-03-21 09:34:12 --> Severity: Parsing Error --> syntax error, unexpected end of file C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 167
ERROR - 2018-03-21 09:34:22 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:35:12 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:38:28 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:41:59 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 09:42:18 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 10:45:08 --> 404 Page Not Found: Admin/doctor-availity-edit
ERROR - 2018-03-21 10:49:29 --> Severity: Notice --> Undefined variable: thid C:\xampp\htdocs\doctor_appointment\application\controllers\Manage_department.php 396
ERROR - 2018-03-21 10:49:29 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\controllers\Manage_department.php 396
ERROR - 2018-03-21 10:49:29 --> Severity: Error --> Call to a member function deleteavaility() on null C:\xampp\htdocs\doctor_appointment\application\controllers\Manage_department.php 396
ERROR - 2018-03-21 10:49:45 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 10:49:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 10:49:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 10:50:51 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 10:50:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 10:50:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 10:51:00 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 10:51:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 10:51:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 10:51:04 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 10:51:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 10:51:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 10:51:29 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 10:51:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 10:51:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 10:53:14 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 10:53:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 10:53:14 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 10:53:14 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 10:54:02 --> 404 Page Not Found: Admin/doctor-availity-edit
ERROR - 2018-03-21 10:56:13 --> 404 Page Not Found: Admin/doctor-availity-edit7
ERROR - 2018-03-21 10:59:24 --> Severity: Notice --> Undefined index: doctor_id" C:\xampp\htdocs\doctor_appointment\application\controllers\Manage_department.php 396
ERROR - 2018-03-21 11:00:21 --> 404 Page Not Found: Admin/doctor-availity-edit
ERROR - 2018-03-21 11:00:43 --> 404 Page Not Found: Admin/doctor-availity-edit
ERROR - 2018-03-21 11:00:48 --> 404 Page Not Found: Admin/doctor-availity-edit
ERROR - 2018-03-21 11:00:54 --> 404 Page Not Found: Admin/doctor-availity-edit
ERROR - 2018-03-21 11:01:07 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 11:01:07 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 11:01:07 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 11:01:07 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 11:02:20 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 11:02:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 11:02:20 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 11:02:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 11:02:35 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 11:02:35 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 11:02:35 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 11:02:35 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-edit.php 75
ERROR - 2018-03-21 11:03:55 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:03:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:03:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:04:07 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:04:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:04:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:04:23 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:04:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:04:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:04:52 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:04:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:04:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:05:13 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:05:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:05:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:05:19 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:05:19 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:05:19 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:05:19 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:05:29 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:05:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:05:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:06:00 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:06:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:06:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:06:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:06:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:06:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:06:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:06:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:06:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:06:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:06:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:11:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:11:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:11:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:11:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:11:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:11:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:11:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:11:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:11:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:11:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:11:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:11:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:11:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:11:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:11:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:11:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:11:10 --> 404 Page Not Found: Admin/yoga-detail
ERROR - 2018-03-21 11:11:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:11:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:11:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:11:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:11:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:11:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:11:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:11:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:12:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:12:46 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:12:46 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:12:46 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:12:46 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:17:12 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `doctor_profile_details`.*, `doctor_specialty_data`.`doctor_specialty`
FROM `doctor_profile_details`
LEFT JOIN `doctor_specialty_data` ON `doctor_specialty_data`.`id`=`doctor_profile_details`.`speciality_id`
WHERE `id` = '6'
ERROR - 2018-03-21 11:18:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:18:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:18:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:18:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:18:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:18:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:18:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:18:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:18:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:18:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:18:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:18:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:18:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:18:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:18:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:18:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:19:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:19:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:19:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:19:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:19:31 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:19:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:19:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:19:40 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:19:40 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:19:40 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:20:22 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:20:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:20:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:20:33 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:20:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:20:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:20:37 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:20:37 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:20:37 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:20:37 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:20:48 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:20:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:20:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:27:18 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `doctor_booking_data`.*, `doctor_profile_details`.`doctor_name`, `doctor_specialty_data`.`doctor_specialty`
FROM `doctor_booking_data`
LEFT JOIN `doctor_profile_details` ON `doctor_profile_details`.`id`=`doctor_booking_data`.`doctor_id`
LEFT JOIN `doctor_specialty_data` ON `doctor_specialty_data`.`id`=`doctor_booking_data`.`department_id`
WHERE `id` = '5'
ERROR - 2018-03-21 11:28:07 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:28:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:28:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:28:13 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:28:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:28:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:28:38 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 11:28:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 11:28:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 11:30:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:30:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:30:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:30:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:30:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:30:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:30:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:30:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:30:35 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:30:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:30:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:31:53 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:31:53 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:31:53 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:32:15 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:32:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:32:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:32:25 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:32:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:32:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:34:20 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:34:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:34:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:34:23 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:34:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:34:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:36:07 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:36:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:36:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:36:11 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:36:11 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:36:11 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:36:11 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:36:11 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:36:11 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:36:11 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:36:11 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:36:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:36:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:36:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:36:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:38:01 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:38:01 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:38:01 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:38:01 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:38:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:38:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:38:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:38:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:38:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:38:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:38:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:38:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:43:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:43:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:43:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:43:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:43:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:43:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:43:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:43:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:43:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:43:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:43:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:43:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:43:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:43:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:43:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:43:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:43:23 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 11:43:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 11:43:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 11:43:30 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 11:43:30 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 11:43:30 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 11:43:35 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:43:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:43:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:43:48 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:43:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:43:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:43:50 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:43:50 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:43:50 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:43:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:43:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:43:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:43:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:43:54 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:43:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:43:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:43:56 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:43:56 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:43:56 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:43:57 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:43:57 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:43:57 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:44:06 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:44:06 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:44:06 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:45:34 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:45:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:45:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:45:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:45:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:45:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:45:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:45:59 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:45:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:45:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:46:00 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:46:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:46:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:46:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:46:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:46:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:46:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:46:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:46:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:46:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:46:08 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:46:18 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:46:18 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:46:18 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:46:19 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 11:46:19 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 11:46:19 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 11:46:25 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 11:46:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 11:46:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 11:49:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:49:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:49:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:49:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:49:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:49:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:49:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:49:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:49:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:49:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:49:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:49:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:50:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:50:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:50:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:50:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:50:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:50:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:50:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:50:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:50:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:50:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:50:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:50:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:50:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:50:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:50:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:50:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:50:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:50:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:50:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:50:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:50:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:50:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:50:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:50:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:54:12 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 11:54:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 11:54:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 11:54:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:54:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:54:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:54:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:54:31 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 11:54:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 11:54:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 11:54:32 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 11:54:32 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 11:54:32 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 11:54:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:54:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:54:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 11:54:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 11:54:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:54:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:54:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:54:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:54:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:54:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:54:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:54:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:54:47 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:54:47 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:54:47 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:54:47 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:54:47 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:54:47 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:54:47 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:54:47 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:54:53 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:54:53 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:54:53 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:54:53 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:54:53 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:54:53 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:56:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:56:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:56:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:56:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:56:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:56:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:56:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:56:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 11:59:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 11:59:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:00:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:00:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:01:16 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:01:16 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:02:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:02:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:02:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:02:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:02:05 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:02:05 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:02:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:02:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:02:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:02:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:02:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:02:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:02:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:02:25 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:02:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:02:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:02:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:02:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:02:32 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:02:32 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:02:32 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:02:32 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:02:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:02:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:04:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:04:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:04:09 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:04:09 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:04:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:04:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:04:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:04:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:04:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:04:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:04:46 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:04:46 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:04:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:04:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:04:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:04:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:05:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:05:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:05:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:05:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:05:56 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:05:56 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:05:56 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:05:56 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:06:18 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:06:18 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:06:18 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:06:18 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:06:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:06:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:06:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:06:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:06:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:06:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:06:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:06:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:06:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:06:55 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:06:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:06:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:06:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:06:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:07:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:07:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:07:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:07:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:08:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:08:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:08:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:08:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:08:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:08:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:08:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:08:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:08:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:08:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:09:28 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:09:28 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:09:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:09:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:09:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:09:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:09:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:09:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:09:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:09:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:10:04 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:10:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:10:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:10:14 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:10:14 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:10:14 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:12:11 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:12:11 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:12:11 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:15:57 --> Severity: Notice --> A non well formed numeric value encountered C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-detail.php 80
ERROR - 2018-03-21 12:16:59 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:16:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:16:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:17:04 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:17:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:17:04 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:17:11 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:17:11 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:17:11 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:17:21 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:17:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:17:21 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:18:49 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:18:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:18:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:19:09 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:19:09 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:19:09 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:19:13 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:19:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:19:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:19:17 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:19:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:19:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:20:20 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:20:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:20:20 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:20:29 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:20:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:20:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:20:35 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:20:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:20:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:21:47 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:21:47 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:21:47 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:23:10 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:23:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:23:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:23:33 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:23:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:23:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:23:42 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:23:42 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:23:42 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:23:45 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:23:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:23:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:23:49 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:23:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:23:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:25:38 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:25:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:25:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:25:49 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:25:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:25:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:26:44 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:26:44 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:26:44 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:27:39 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:27:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:27:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:27:46 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:27:46 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:27:46 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:27:53 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:27:53 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:27:53 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:27:54 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:27:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:27:54 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:28:00 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:28:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:28:00 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:28:01 --> Severity: Notice --> Undefined property: stdClass::$doctor_name C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 26
ERROR - 2018-03-21 12:28:01 --> Severity: Notice --> Undefined variable: doctor_speclity C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 57
ERROR - 2018-03-21 12:28:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 57
ERROR - 2018-03-21 12:28:10 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:28:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:28:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:28:11 --> Severity: Notice --> Undefined variable: doctor_speclity C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 76
ERROR - 2018-03-21 12:28:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 76
ERROR - 2018-03-21 12:28:13 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:28:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:28:13 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:28:15 --> Severity: Notice --> Undefined property: stdClass::$doctor_name C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 26
ERROR - 2018-03-21 12:28:15 --> Severity: Notice --> Undefined variable: doctor_speclity C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 57
ERROR - 2018-03-21 12:28:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 57
ERROR - 2018-03-21 12:28:18 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:28:18 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:28:18 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:28:34 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:28:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:28:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:28:51 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:28:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:28:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:28:57 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:28:57 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:28:57 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:29:35 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:29:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:29:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:29:44 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:29:44 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:29:44 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:29:46 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:29:46 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:29:46 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:30:30 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:30:30 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:30:30 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:30:32 --> Severity: Notice --> Undefined property: stdClass::$doctor_name C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 26
ERROR - 2018-03-21 12:30:32 --> Severity: Notice --> Undefined variable: doctor_speclity C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 57
ERROR - 2018-03-21 12:30:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 57
ERROR - 2018-03-21 12:31:25 --> Severity: Notice --> Undefined property: stdClass::$doctor_name C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 26
ERROR - 2018-03-21 12:31:25 --> Severity: Notice --> Undefined variable: doctor_speclity C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 57
ERROR - 2018-03-21 12:31:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 57
ERROR - 2018-03-21 12:31:43 --> Severity: Notice --> Undefined property: stdClass::$doctor_name C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 25
ERROR - 2018-03-21 12:31:43 --> Severity: Notice --> Undefined variable: doctor_speclity C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 56
ERROR - 2018-03-21 12:31:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 56
ERROR - 2018-03-21 12:31:51 --> Severity: Notice --> Undefined property: stdClass::$doctor_name C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 25
ERROR - 2018-03-21 12:31:51 --> Severity: Notice --> Undefined variable: doctor_speclity C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 56
ERROR - 2018-03-21 12:31:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 56
ERROR - 2018-03-21 12:32:07 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:32:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:32:07 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:32:10 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:32:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:32:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:32:29 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:32:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:32:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:32:30 --> Severity: Notice --> Undefined property: stdClass::$doctor_name C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 25
ERROR - 2018-03-21 12:32:30 --> Severity: Notice --> Undefined variable: doctor_speclity C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 56
ERROR - 2018-03-21 12:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 56
ERROR - 2018-03-21 12:32:32 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 12:32:32 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 12:32:32 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 12:32:34 --> Severity: Notice --> Undefined variable: doctor_speclity C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 75
ERROR - 2018-03-21 12:32:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 75
ERROR - 2018-03-21 12:32:36 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:32:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:32:36 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:32:43 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:32:43 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:32:48 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:32:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:32:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:32:56 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:32:56 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:32:56 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:33:48 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:33:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:33:48 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:34:22 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:34:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:34:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:34:27 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:34:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:34:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:34:34 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:34:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:34:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:34:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:34:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:34:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:34:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:34:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:34:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:35:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:35:34 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:35:40 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:35:40 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:35:47 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:35:47 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:36:16 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:36:16 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:36:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:36:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:36:28 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:36:28 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:36:57 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:36:57 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:36:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:36:59 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:37:03 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 91
ERROR - 2018-03-21 12:37:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 93
ERROR - 2018-03-21 12:37:03 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\patient-booking-view.php 94
ERROR - 2018-03-21 12:37:24 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:37:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:37:24 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:37:29 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:37:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:37:29 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:37:45 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:37:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:37:45 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:38:12 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:38:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:38:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:38:31 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:38:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:38:31 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:38:46 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:38:46 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:39:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:39:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:39:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 12:39:17 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 12:39:27 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:39:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:39:27 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:39:50 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:39:50 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:39:50 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:40:06 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:40:06 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:40:06 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:40:06 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:40:06 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 91
ERROR - 2018-03-21 12:40:06 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 92
ERROR - 2018-03-21 12:41:37 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 86
ERROR - 2018-03-21 12:41:37 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 88
ERROR - 2018-03-21 12:41:37 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:41:37 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 86
ERROR - 2018-03-21 12:41:37 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 88
ERROR - 2018-03-21 12:41:37 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-availity-list.php 89
ERROR - 2018-03-21 12:51:38 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 12:52:26 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 12:52:33 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 12:52:48 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 12:52:57 --> 404 Page Not Found: Assets/vendor_components
ERROR - 2018-03-21 12:53:18 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 12:53:18 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 12:53:18 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 12:53:19 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 12:53:19 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 12:53:20 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 12:53:20 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 12:53:20 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 12:53:20 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 12:53:20 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 12:53:21 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 12:53:21 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 12:53:23 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:53:31 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:53:34 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:53:42 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:53:44 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:53:52 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:53:54 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:53:55 --> 404 Page Not Found: Services-2html/index
ERROR - 2018-03-21 12:54:08 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 12:54:08 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 12:54:08 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 12:54:08 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 12:54:08 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 12:54:09 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 12:54:09 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 12:54:11 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:54:19 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:54:22 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:54:30 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:54:32 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:54:40 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:54:42 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:54:50 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:54:52 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:54:59 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 12:54:59 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 12:54:59 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 12:54:59 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 12:54:59 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 12:55:00 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 12:55:00 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 12:55:02 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:55:10 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:55:12 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:55:15 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 12:55:15 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 12:55:15 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 12:55:15 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 12:55:16 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 12:55:16 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 12:55:18 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:55:50 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:55:52 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:56:08 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:56:10 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:56:19 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:56:20 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:56:29 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:56:30 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:56:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:56:39 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:56:47 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:56:48 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:57:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:57:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:57:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:57:15 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:57:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:57:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:57:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:57:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:57:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:57:33 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:57:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:57:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:57:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:57:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:57:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:57:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:57:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:57:49 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:57:52 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:57:54 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:58:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:58:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:58:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:58:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:58:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:58:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:58:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:58:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:58:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 87
ERROR - 2018-03-21 12:58:10 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-specialty-view.php 88
ERROR - 2018-03-21 12:58:30 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 12:58:32 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:00:02 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:00:04 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:00:12 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:00:14 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:00:23 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:00:24 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:00:33 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:00:35 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:00:43 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:00:45 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:00:53 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:00:55 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:01:03 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:01:05 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:01:14 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:01:15 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:01:24 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:01:26 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:01:34 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:01:36 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:04:09 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:04:10 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:04:19 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:04:21 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:05:01 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:05:03 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:05:11 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:05:19 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:05:31 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:05:32 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:05:49 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:05:50 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:06:08 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:06:09 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:06:18 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:06:19 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:06:25 --> 404 Page Not Found: Services-2html/index
ERROR - 2018-03-21 13:06:28 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:06:28 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:06:30 --> 404 Page Not Found: Services-2html/index
ERROR - 2018-03-21 13:06:33 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:06:33 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:06:37 --> 404 Page Not Found: Blog-singlehtml/index
ERROR - 2018-03-21 13:06:40 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:06:40 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:06:43 --> 404 Page Not Found: Blog-singlehtml/index
ERROR - 2018-03-21 13:06:45 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:06:46 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:07:48 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:07:49 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:07:49 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:07:49 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:07:49 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:07:49 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:07:50 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:07:52 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:09:37 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:09:39 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:10:08 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:10:08 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:10:08 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:10:08 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:10:08 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:10:09 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:10:10 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:10:12 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 13:10:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 13:10:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 13:10:17 --> Severity: Notice --> Undefined variable: doctor_speclity C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 75
ERROR - 2018-03-21 13:10:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 75
ERROR - 2018-03-21 13:10:26 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 13:10:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 13:10:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 13:10:27 --> 404 Page Not Found: Uploads_banner/400x225_28688992-BA69-4E84-A9A8-EB4062BED79F.jpg
ERROR - 2018-03-21 13:10:27 --> 404 Page Not Found: Uploads_banner/400x225_28688992-BA69-4E84-A9A8-EB4062BED79F.jpg
ERROR - 2018-03-21 13:11:12 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 13:11:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 13:11:12 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 13:11:15 --> 404 Page Not Found: Uploads_banner/400x225_28688992-BA69-4E84-A9A8-EB4062BED79F.jpg
ERROR - 2018-03-21 13:11:15 --> 404 Page Not Found: Uploads_banner/400x225_28688992-BA69-4E84-A9A8-EB4062BED79F.jpg
ERROR - 2018-03-21 13:11:49 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:12:18 --> 404 Page Not Found: Uploads_banner/400x225_28688992-BA69-4E84-A9A8-EB4062BED79F.jpg
ERROR - 2018-03-21 13:12:18 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:12:18 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:12:18 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:12:18 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:12:18 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:12:19 --> 404 Page Not Found: Uploads_banner/400x225_28688992-BA69-4E84-A9A8-EB4062BED79F.jpg
ERROR - 2018-03-21 13:12:19 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:12:19 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:12:21 --> 404 Page Not Found: Uploads_banner/400x225_28688992-BA69-4E84-A9A8-EB4062BED79F.jpg
ERROR - 2018-03-21 13:12:21 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:12:21 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:12:21 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:12:21 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:12:21 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:12:22 --> 404 Page Not Found: Uploads_banner/400x225_28688992-BA69-4E84-A9A8-EB4062BED79F.jpg
ERROR - 2018-03-21 13:12:22 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:12:22 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:12:24 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:12:33 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:12:35 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:12:43 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:12:43 --> 404 Page Not Found: Uploads_banner/400x225_28688992-BA69-4E84-A9A8-EB4062BED79F.jpg
ERROR - 2018-03-21 13:12:45 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:14:40 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:14:40 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:14:41 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:14:41 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:14:41 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:14:41 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:14:42 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:14:44 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:17:26 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:17:26 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:17:27 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:17:27 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:17:27 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:17:27 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:17:27 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:17:30 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:17:59 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:17:59 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:17:59 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:18:00 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:18:00 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:18:01 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:18:01 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:18:03 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:18:58 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:18:59 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:18:59 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:18:59 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:18:59 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:19:00 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:19:00 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:19:02 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:19:44 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:19:44 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:19:44 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:19:44 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:19:44 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:19:46 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:19:46 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:19:48 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:21:06 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:21:06 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:21:06 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:21:06 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:21:06 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:21:07 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:21:07 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:21:10 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:21:15 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:21:41 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 13:21:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 13:21:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 13:21:43 --> Severity: Notice --> Undefined property: stdClass::$doctor_name C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 25
ERROR - 2018-03-21 13:21:43 --> Severity: Notice --> Undefined variable: doctor_speclity C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 56
ERROR - 2018-03-21 13:21:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 56
ERROR - 2018-03-21 13:21:43 --> 404 Page Not Found: Uploads_banner/400x225_28688992-BA69-4E84-A9A8-EB4062BED79F.jpg
ERROR - 2018-03-21 13:21:43 --> 404 Page Not Found: Uploads_banner/400x225_28688992-BA69-4E84-A9A8-EB4062BED79F.jpg
ERROR - 2018-03-21 13:24:26 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:24:26 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:24:27 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:24:27 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:24:27 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:24:28 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:24:28 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:24:30 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:24:47 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:24:47 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:24:47 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:24:47 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:24:47 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:24:48 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:24:48 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:24:50 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:25:30 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 13:25:30 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 13:25:30 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 13:25:32 --> Severity: Notice --> Undefined variable: doctor_speclity C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 75
ERROR - 2018-03-21 13:25:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 75
ERROR - 2018-03-21 13:25:41 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 13:25:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 13:25:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 13:25:41 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 13:25:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 13:25:41 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 13:25:46 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:25:47 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:25:47 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:25:47 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:25:47 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:25:48 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:25:48 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:25:50 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:25:59 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:26:01 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:26:09 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:26:11 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:27:11 --> Severity: Notice --> Undefined variable: doctor_speclity C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 75
ERROR - 2018-03-21 13:27:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\doctor_appointment\application\views\admin\banner.php 75
ERROR - 2018-03-21 13:27:22 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 13:27:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 13:27:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 13:27:22 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 13:27:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 13:27:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 13:27:22 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 13:27:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 13:27:22 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 13:27:25 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:27:25 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:27:25 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:27:26 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:27:26 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:27:26 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:27:26 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:27:29 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:27:29 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:27:31 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:27:40 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:27:42 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:28:48 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:28:49 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:28:58 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:28:59 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:29:49 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:29:50 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:29:50 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:29:50 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:29:50 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:29:51 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 13:29:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 13:29:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 13:29:51 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 13:29:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 13:29:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 13:29:51 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 13:29:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 13:29:51 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 13:29:51 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:29:51 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:29:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:29:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:29:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:29:52 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:29:58 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:29:58 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:29:58 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:29:58 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:30:35 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:31:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:31:23 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:31:33 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:31:39 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:32:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:32:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:32:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:32:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:32:11 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:32:17 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:32:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:32:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:32:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:32:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:32:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:32:35 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:32:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:32:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:32:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:32:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:32:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:32:38 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:32:40 --> 404 Page Not Found: Uploads/doctorimage
ERROR - 2018-03-21 13:32:40 --> 404 Page Not Found: Uploads/doctorimage
ERROR - 2018-03-21 13:34:10 --> 404 Page Not Found: Uploads/doctorimage
ERROR - 2018-03-21 13:34:11 --> 404 Page Not Found: Uploads/doctorimage
ERROR - 2018-03-21 13:34:40 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:34:40 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:34:40 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:34:40 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:34:40 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 87
ERROR - 2018-03-21 13:34:40 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\doctor-list-view.php 88
ERROR - 2018-03-21 13:39:31 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:39:31 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:39:31 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:39:31 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:39:31 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:39:32 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:39:32 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:39:35 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:39:43 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:39:45 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:41:22 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:41:23 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:41:23 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:41:23 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:41:23 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:41:23 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:41:24 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:41:26 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:44:11 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:44:11 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:44:11 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:44:11 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:44:11 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:44:12 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:44:12 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:44:14 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:46:09 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:46:09 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:46:09 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:46:10 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:46:10 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:46:10 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:46:12 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:46:21 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:46:23 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:46:33 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:46:35 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:55:42 --> Severity: Parsing Error --> syntax error, unexpected '}' C:\xampp\htdocs\doctor_appointment\application\views\home.php 573
ERROR - 2018-03-21 13:56:16 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:56:16 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 13:56:16 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:56:16 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 13:56:16 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 13:56:17 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:56:18 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 13:56:19 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:56:28 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:56:30 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:56:38 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:56:40 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:56:48 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 13:56:50 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:09:31 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 15:09:33 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 15:09:34 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 15:09:34 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 15:09:34 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 15:09:35 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 15:09:36 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 15:10:11 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 15:10:11 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 15:10:11 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 15:10:11 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 15:10:11 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 15:10:12 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 15:10:12 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 15:10:15 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:10:16 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:10:18 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:10:26 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 15:10:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 15:10:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 15:10:26 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 15:10:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 15:10:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 15:10:26 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 15:10:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 15:10:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 15:10:36 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:10:38 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:20:26 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 15:20:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 15:20:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 15:20:26 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 15:20:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 15:20:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 15:20:26 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 15:20:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 15:20:26 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 15:20:28 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 15:20:29 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 15:20:29 --> 404 Page Not Found: Assets/images
ERROR - 2018-03-21 15:20:29 --> 404 Page Not Found: Assets/stylesheets
ERROR - 2018-03-21 15:20:29 --> 404 Page Not Found: Assets/javascripts
ERROR - 2018-03-21 15:20:30 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 15:20:30 --> 404 Page Not Found: Assets/fonts
ERROR - 2018-03-21 15:20:32 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:20:40 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:20:42 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:20:51 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:20:53 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:21:01 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:21:03 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:21:11 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:21:13 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:21:21 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:21:23 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:21:32 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:21:33 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:21:42 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:21:43 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:21:52 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:21:54 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:22:02 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:22:04 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:22:12 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:22:14 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:22:23 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:22:24 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:22:33 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:22:34 --> 404 Page Not Found: Images/main-slider
ERROR - 2018-03-21 15:25:02 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 15:25:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 15:25:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 15:25:02 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 15:25:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 15:25:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
ERROR - 2018-03-21 15:25:02 --> Severity: Notice --> Undefined property: stdClass::$doctor_specialty C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 80
ERROR - 2018-03-21 15:25:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 87
ERROR - 2018-03-21 15:25:02 --> Severity: Notice --> Undefined property: stdClass::$testimonial_count C:\xampp\htdocs\doctor_appointment\application\views\admin\banner_list_view.php 88
