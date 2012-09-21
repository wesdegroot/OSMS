<?php
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
$site->loadPage('home'); //NEEDS TO GET AJAX CALLS!!!

if ( !isset($_GET['ajax']) )
	{
		if (!$site->isMobile()) 
		{
			$site->loadStyle($site->getConfig('template'));
		}
		else
		{
			$site->loadStyle("mobile");
		}
	}
	
$site->finish();

?>