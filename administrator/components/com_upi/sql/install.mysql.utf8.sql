
-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : Rooms
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_rooms` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`alias` VARCHAR(255) ,
	`title` VARCHAR(255) NOT NULL ,
	`capacity` INT(11) ,
	`note` TEXT ,
	`modified_by` BIGINT(20) UNSIGNED ,
	`created_by` BIGINT(20) UNSIGNED ,
	`creation_date` DATETIME ,
	`ordering` INT(11) ,
	`published` TINYINT(11) DEFAULT 1 ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : Grades
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_grades` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`title` VARCHAR(255) NOT NULL ,
	`alias` VARCHAR(255) ,
	`note` TEXT ,
	`modified_by` BIGINT(20) UNSIGNED ,
	`created_by` BIGINT(20) UNSIGNED ,
	`ordering` INT(11) ,
	`published` TINYINT(11) ,
	`creation_date` DATETIME ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : Periods
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_periods` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`title` VARCHAR(255) NOT NULL ,
	`alias` VARCHAR(255) ,
	`weekday` VARCHAR(255) NOT NULL ,
	`note` TEXT ,
	`created_by` BIGINT(20) UNSIGNED ,
	`modified_by` BIGINT(20) UNSIGNED ,
	`creation_date` DATETIME ,
	`published` TINYINT(11) ,
	`ordering` INT(11) ,
	`courseperiod_id` BIGINT(20) UNSIGNED ,
	`start_time` TIMESTAMP ,
	`end_time` TIMESTAMP ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : Subjects
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_subjects` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`title` VARCHAR(255) NOT NULL ,
	`alias` VARCHAR(255) ,
	`note` TEXT ,
	`modified_by` BIGINT(20) UNSIGNED ,
	`created_by` BIGINT(20) UNSIGNED ,
	`creation_date` DATETIME ,
	`ordering` INT(11) ,
	`published` TINYINT(11) ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : TypeTests
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_typetests` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`title` VARCHAR(255) NOT NULL ,
	`alias` VARCHAR(255) ,
	`created_by` BIGINT(20) UNSIGNED ,
	`modified_by` BIGINT(20) UNSIGNED ,
	`creation_date` DATETIME ,
	`ordering` INT(11) ,
	`published` TINYINT(11) ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : Courses
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_courses` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`title` VARCHAR(255) NOT NULL ,
	`alias` VARCHAR(255) ,
	`created_by` BIGINT(20) UNSIGNED ,
	`modified_by` BIGINT(20) UNSIGNED ,
	`creation_date` DATETIME ,
	`ordering` INT(11) ,
	`published` TINYINT(11) ,
	`start_date` DATE ,
	`end_date` DATE ,
	`active` TINYINT ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : CoursePeriods
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_courseperiods` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`title` VARCHAR(255) NOT NULL ,
	`alias` VARCHAR(255) ,
	`start_date` DATE ,
	`end_date` DATE ,
	`note` TEXT ,
	`active` TINYINT ,
	`modified_by` BIGINT(20) UNSIGNED ,
	`created_by` BIGINT(20) UNSIGNED ,
	`creation_date` DATETIME ,
	`ordering` INT(11) ,
	`published` TINYINT(11) ,
	`course_id` BIGINT(20) UNSIGNED ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : StaffTypes
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_stafftypes` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`title` VARCHAR(255) NOT NULL ,
	`alias` VARCHAR(255) ,
	`created_by` BIGINT(20) UNSIGNED ,
	`modified_by` BIGINT(20) UNSIGNED ,
	`creation_date` DATETIME ,
	`ordering` INT(11) ,
	`published` TINYINT(11) ,
	`note` TEXT ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : Staves
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_staves` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`first_name` VARCHAR(255) NOT NULL ,
	`last_name` VARCHAR(255) ,
	`email` VARCHAR(255) ,
	`birthday` DATE ,
	`ethnicity` VARCHAR(255) ,
	`profile_pic` VARCHAR(255) ,
	`modified_by` BIGINT(20) UNSIGNED ,
	`created_by` BIGINT(20) UNSIGNED ,
	`creation_date` DATETIME ,
	`published` TINYINT(11) ,
	`ordering` INT(11) ,
	`home_phone` VARCHAR(255) ,
	`mobile_phone` VARCHAR(255) ,
	`emergency_name` VARCHAR(255) ,
	`relation` VARCHAR(255) ,
	`emergency_home_phone` VARCHAR(255) ,
	`my_string` VARCHAR(255) ,
	`joining_date` VARCHAR(255) ,
	`leaving_date` VARCHAR(255) ,
	`certification_name` VARCHAR(255) ,
	`certification_description` DATE ,
	`note` DATE ,
	`address_1` TEXT ,
	`my_text` TEXT ,
	`gender_id` VARCHAR(255) DEFAULT 'Nam' ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : ClassTeachers
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_classteachers` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`class_id` BIGINT(20) UNSIGNED ,
	`teacher_id` BIGINT(20) UNSIGNED ,
	`period_id` BIGINT(20) UNSIGNED ,
	`start_date` DATE ,
	`note` TEXT ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : ClassTutors
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_classtutors` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`class_id` BIGINT(20) UNSIGNED ,
	`staff_id` BIGINT(20) UNSIGNED ,
	`period_id` BIGINT(20) UNSIGNED ,
	`start_date` DATE ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : Classes
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_classes` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`title` VARCHAR(255) ,
	`alias` VARCHAR(255) ,
	`subject_id` BIGINT(20) UNSIGNED ,
	`grade_id` BIGINT(20) UNSIGNED ,
	`period_id` BIGINT(20) UNSIGNED ,
	`note` TEXT ,
	`modified_by` BIGINT(20) UNSIGNED ,
	`created_by` BIGINT(20) UNSIGNED ,
	`creation_date` DATETIME ,
	`modification_date` DATETIME ,
	`ordering` INT(11) ,
	`published` TINYINT(11) ,
	`start_date` DATE ,
	`end_date` DATE ,
	`teacher_id` BIGINT(20) UNSIGNED ,
	`tutor_id` BIGINT(20) UNSIGNED ,
	`room_id` BIGINT(20) UNSIGNED ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : Students
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_students` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`first_name` VARCHAR(255) NOT NULL ,
	`last_name` VARCHAR(255) NOT NULL ,
	`email` VARCHAR(255) ,
	`phone` VARCHAR(255) ,
	`gender_id` VARCHAR(255) NOT NULL DEFAULT 'Nam' ,
	`birthday` DATE ,
	`joining_date` DATE ,
	`grade_id` BIGINT(20) UNSIGNED ,
	`address_1` TEXT ,
	`address_2` TEXT ,
	`emergency_name_1` VARCHAR(255) ,
	`emergency_home_phone_1` VARCHAR(255) ,
	`emergency_work_phone_1` VARCHAR(255) ,
	`emergency_email_1` VARCHAR(255) ,
	`emergency_job_1` VARCHAR(255) ,
	`emergency_name_2` VARCHAR(255) ,
	`emergency_home_phone_2` VARCHAR(255) ,
	`emergency_work_phone_2` VARCHAR(255) ,
	`emergency_email_2` VARCHAR(255) ,
	`emergency_job_2` VARCHAR(255) ,
	`emergency_name_3` VARCHAR(255) ,
	`emergency_home_phone_3` VARCHAR(255) ,
	`emergency_work_phone_3` VARCHAR(255) ,
	`emergency_email_3` VARCHAR(255) ,
	`emergency_job_3` VARCHAR(255) ,
	`note` TEXT ,
	`modified_by` BIGINT(20) UNSIGNED ,
	`created_by` BIGINT(20) UNSIGNED ,
	`creation_date` DATETIME ,
	`modification_date` DATETIME ,
	`ordering` INT(11) ,
	`published` TINYINT(11) ,
	`school` VARCHAR(255) ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : ClassRooms
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_classrooms` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`class_id` BIGINT(20) UNSIGNED ,
	`room_id` BIGINT(20) UNSIGNED ,
	`period_id` BIGINT(20) UNSIGNED ,
	`start_date` DATE ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : Tests
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_tests` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`title` VARCHAR(255) ,
	`alias` VARCHAR(255) ,
	`document` VARCHAR(255) ,
	`start_date` DATE ,
	`total_score` INT(11) ,
	`detail_score` VARCHAR(255) ,
	`time` VARCHAR(255) ,
	`type_test_id` BIGINT(20) UNSIGNED ,
	`note` TEXT ,
	`created_by` BIGINT(20) UNSIGNED ,
	`modified_by` BIGINT(20) UNSIGNED ,
	`creation_date` DATETIME ,
	`modification_date` DATETIME ,
	`published` TINYINT(11) ,
	`ordering` INT(11) ,
	`class_id` BIGINT(20) UNSIGNED ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : AttendanceExcercies
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_attendanceexcercies` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`absent` TINYINT ,
	`absent_reason` TEXT ,
	`late` TINYINT ,
	`late_reason` TEXT ,
	`late_time` VARCHAR(255) ,
	`exercise_numer` INT(11) ,
	`exercise_done` INT(11) ,
	`exercise_correct` INT(11) ,
	`exercise_reason` TEXT ,
	`present` VARCHAR(255) ,
	`studen_id` BIGINT(20) UNSIGNED ,
	`class_id` BIGINT(20) UNSIGNED ,
	`created_by` BIGINT(20) UNSIGNED ,
	`modified_by` BIGINT(20) UNSIGNED ,
	`creation_date` DATETIME ,
	`modification_date` DATETIME ,
	`ordering` INT(11) ,
	`published` TINYINT(11) ,
	`start_date` DATE ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : TestClasses
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_testclasses` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`test_id` BIGINT(20) UNSIGNED ,
	`class_id` BIGINT(20) UNSIGNED ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- - 8< - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-- Create table : TestMarks
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - >8 -
CREATE TABLE IF NOT EXISTS `#__upi_testmarks` (
	`id` BIGINT(20) UNSIGNED NOT NULL auto_increment,
	`total_score` INT(11) ,
	`detail_score` VARCHAR(255) ,
	`student_id` BIGINT(20) UNSIGNED ,
	`test_class_id` BIGINT(20) UNSIGNED ,

	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

