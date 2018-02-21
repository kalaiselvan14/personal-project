<?php
	require_once "../common_init.inc.php";
	 $_CONFIG['base_path'] = dirname(__FILE__).$_ds;
	 $_CONFIG['main_path'] = $_CONFIG['base_path'];
	 $_CONFIG['main_url'] = $_CONFIG['base_url'];
	
	$_CONFIG['corporate_img_path'] = $_CONFIG['main_path'].'img'.$_ds.'corporate'.$_ds;
	$_CONFIG['base_url_mail'] = $_CONFIG['base_url'].'admin/';

	$_CONFIG['base_url_img'] = $_CONFIG['base_url'];
	
	$_CONFIG['admin_url'] = $_CONFIG['base_url']."admin/";
	$_CONFIG['admin_path'] = $_CONFIG['base_path']."admin".$_ds;

	$_CONFIG['base_url'] = $_CONFIG['base_url']."admin/";


	//cache file end for plans,features,plan_features
	$_CONFIG['classes_path'] = $_CONFIG['core_path'].'classes'.$_ds;
	$_CONFIG['inc_path'] = $_CONFIG['core_path'].'inc'.$_ds;

	//default page
	$_CONFIG['default_page']='dashboard';
     
	 $_CONFIG['noreply'] = 'noreply@iwannabe.co.in';
	$_CONFIG['admin_mail'] = 'iwb.clorida@gmail.com';
	 $_CONFIG['newmail_sub_path'] = $_CONFIG['admin_path']."msg".$_ds;
	 //$_CONFIG['mail_template_path'] = $_CONFIG['admin_url']."template".$_ds;
	  $_CONFIG['mail_template_path'] = $_CONFIG['main_url']."template".$_ds;
	 $_CONFIG['mail_sub_path'] = $_CONFIG['mail_template_path']."sub".$_ds;
	$_CONFIG['mail_msg_path'] = $_CONFIG['mail_template_path']."msg".$_ds;
	$_CONFIG['html_loc'] = $_CONFIG['base_url'].'view/';
	$_CONFIG['html_path'] = $_CONFIG['base_path'].'view'.$_ds;
	$_CONFIG['html_css_loc'] = $_CONFIG['html_loc'].'css/';
	$_CONFIG['html_css_path'] = $_CONFIG['html_path'].'css'.$_ds;
	$_CONFIG['html_js_loc'] = $_CONFIG['html_loc'].'js/';
	$_CONFIG['html_js_path'] = $_CONFIG['html_path'].'js'.$_ds;

	$_CONFIG['corpglobal'] = 'off';
	
	
	//debug status
	$_CONFIG['debug']= false;
	/***********************************************************/

	/** LANGUAGE **/
	if(isset($_GET['lang']))
	{
	    if(!empty($_GET['lang']))
	    {
	     $_SESSION['lang']=$_GET['lang'];
	    }else{
	        $_SESSION['lang']='en';
	    }
	}
	 elseif(empty($_SESSION['lang']))
	{
	    $_SESSION['lang']='en';
	}
	//include_once($_CONFIG['lang_path'].$_SESSION['lang'].$_ds.'text.php');
	/** LANGUAGE **/

	//assigning the includes
	include_once $_CONFIG['inc_path'].'load_inc.php';
	include_once $_CONFIG['classes_path'].'load_classes.php';
	//include_once $_CONFIG['inc_path'].'display_text.php';
	//End assigning the includes

	$role='admin';

	
	$iwb = new IWB;

	$db = new DB;

	$admin = new Admin;

	$corporate = new corporate;

	$jobSeeker = new JobSeeker;

	$student = new Student;

	$security = new SECURITY;

	$mail = new MAIL_TEMPLATE;

	$industry = new INDUSTRY;

	$functional = new FUNCTIONAL_AREA;

	$selection_pro = new SELECTIONPROCESS;

	$training_module = new TRAINING_MODULES;

	$city = new cities;

	$states = new states;

	$positions_pri = new POSITIONS_PRIMARY;

	$positions_settings = new POSITIONS_SETTINGS;

	$positions_sec = new POSITIONS_SECONDARY;

	$campuspartner = new CAMPUS_PARTNER;

	$skills = new SKILLS;

	$intern_primary = new INTERNSHIP_PRIMARY;

	$intern_secondary = new INTERNSHIP_SECONDARY;

	$training_module = new TRAINING_MODULES;

	$training_module_cat = new TRAINING_MODULE_CATEGORY;

	$training_module_sub = new TRAINING_MODULE_SUBJECT;

	$position_notification = new POSITIONS_NOTIFICATION;

	$apply_position = new POSITIONS_APPLY;

	$stu_edu_details= new STU_EDUCATIONAL_DETAILS;
	
	$stu_certificate= new STUDENT_CERTIFICATE;
	
	$stu_exp_details = new STUDENT_EMPLOYMENT_DETAILS;


	if(!$db->connect($_DBCONFIG)){//connecting to DB
	    die("<!--Error in connection-->");
	}

?>
