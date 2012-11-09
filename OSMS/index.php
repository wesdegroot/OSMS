<?php
error_reporting(E_ALL);
@ini_set('display_errors',1);
@session_start();


 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 # 
 # OPENSOURCE
 # => CC BY-SA 
 # => => That means you may use, edit, improve the code, as long you share it also; you MUST leave the names of 'WDG.P'
 #
 # => Rules: 
 # => http://wdgp.nl/#conditions

require './data/required/load.php';

if( !preg_match ( "#" . $_SERVER['HTTP_HOST'] . "#" , $conf['site']['url'] ) )
{
 header("location: " . $conf['site']['url']); 
 exit; 
}

if(isset($_GET['setLang']))
{
	global $conf;
	$_SESSION['lang'] = $_GET['setLang'];
	setcookie("lang", $_GET['setLang'], time()+(3600*24*365));  /* expire in 1 hour */
	header("location: ".$conf['site']['url']);
	exit;
}

if(!isset($_SESSION['lang'])) // do you have "selected" a language?
{                             // NO...
	global $conf;
	if ($conf['system']['language'] == "auto") // if config is auto, plz, check tha thing
	{
		$lang = ($_SERVER['HTTP_ACCEPT_LANGUAGE']); // read the language from the browser...

		if(ereg("nl", $lang)) {   /// if NL then...
   			$lang = "nl"; //lang=nl
		} else {  
    		$lang = "en"; //lang=en
		} 
	}
	else
	{
		$lang = $conf['system']['language']; //else forced language.
	}

	setcookie("lang", $lang, time()+(3600*24*365));  /* expire in 1 hour */
	$_SESSION['lang'] = $lang;                       // this session only..
	header("location: ".$conf['site']['url']);       // Force Reload.......
	exit();                                          // Then kill Request..
}

$site = new superclass(); //  "Tha Supah" class.

if ( !isset($_GET['page']) )
	$_GET['page'] = "home"; // if no page requested, i will request the "home"-page for you.
	
if ( !isset($_GET['ajaxload']) ) // are you ajax, or not?
	{
		if (!$site->isMobile()) //check if the site is entered from a mobile device.
		{
			$site->loadStyle(
								$site->getConfig('template'), //load the default template
								null //load nothing, ajax will do that for you.
						    );
		}
		else
		{
			$site->loadStyle(
								"mobile", //mobile theme :)
								$site->loadPage($_GET['page']) //needs, no?, or, w/e it has ajax,
							);
		} 
		$site->finish( (!isset($_GET['ajaxload']))?true:false ); // check if my page is requested from ajax,
															     // if true, then the "style" will be ignored.
	}
else
	{
		echo $site->loadPage($_GET['page']); //AJAX CALL!!!
											 // NO STYLE!!!
	}
?>
