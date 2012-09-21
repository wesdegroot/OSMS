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

$configuration=array(); //Don't Change This

		###########################################################################################
		######################################## Configuration ####################################
		############################## DO NOT CHANGE AT YOUR OWN!!! ###############################
		#################################### RUN SETUP INSTEAD ####################################
		###########################################################################################

$configuration['database']['type'] 		  = 'MySQL'; 
										  //Database Type [Supported: MySQL] (More Later)
$configuration['database']['data'] 		  = 'OSMS'; 
										  //Database Name
$configuration['database']['pref'] 		  = 'OSMS_'; 
										  //Prexix (Recommend: OSMS_)
$configuration['database']['user'] 		  = 'username'; 
										  //Username (Fake In GitHub)
$configuration['database']['pass'] 		  = 'password';
										  //Password (Fake In GitHub)
$configuration['database']['host'] 		  = 'localhost';
										  //Typically not localhost, most of them localhost
####################################################################################################
$configuration['site']['name'] 			  = 'BeheerSite';
									      //Site/Company Name
$configuration['site']['url'] 			  = 'http://p.wdgp.nl/OSMS'; 
										  // SiteUrl
$configuration['site']['admin']			  = '1;2;';
										  //SiteAdmins ID 1/2; [NOT SUPPORTED YET.]
####################################################################################################
$configuration['system']['language'] 	  = 'auto'; 
							              //Choices: auto, nl, en
$configuration['system']['largedatabase'] = false; 
									      //more than 10000 employees then set it true
$configuration['system']['check_update']  = true; 
										  //Check for updates
$configuration['system']['auto_update']   = true;
									      //Automatic Update.
####################################################################################################
$configuration['setup']['finished']       = true; 
										  // is the setup finished well?
####################################################################################################
?>