<?php
error_reporting(E_ALL);
@ini_set('display_errors',1);

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

$site = new superclass();

if ( !isset($_GET['page']) )
	$_GET['page'] = "home";
	
if ( !isset($_GET['ajaxload']) )
	{
		if (!$site->isMobile()) 
		{
			$site->loadStyle(
								$site->getConfig('template'),
								null /*$site->loadPage($_GET['page'])*/ //NEEDS TO GET AJAX CALLS!!!
						    );
		}
		else
		{
			$site->loadStyle(
								"mobile",
								$site->loadPage($_GET['page']) //NEEDS TO GET AJAX CALLS!!!
							);
		} ///temporary fix... frustrated... :@
		$site->finish( (!isset($_GET['ajaxload']))?true:false );
	}
else
	{
		echo $site->loadPage($_GET['page']); //AJAX CALL!!!
	}
?>