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
 
if ( !defined ( 'MOD_LOADED_sample_autoload') ) 
{
	$module[] = array(
						'sample_autoload',
						'sample_autoload module',
						array('mod_sample_autoload_func', 'mod_sample_autoload_view') //For Help!
					 );

	function mod_sample_autoload_module_autoload_install () {
		// run here "install" commands (e.g. sql, writeconfig)
		 $cfg->value("./data/config/configuration.ini", "autoload", "sample_autoload_module_autoload_autoload", "true"); //SET AUTO LOAD!!!
	}

	function mod_sample_autoload_func ( $parameters = null )
	{
		return "implent some functions !!!";
	}

	function mod_sample_autoload_view ()
	{
		return "this comes on the website..." . mod_sample_autoload_func();
	}

	define('MOD_LOADED_sample_autoload', true);
}
else {
	echo mod_sample_autoload_view();
}
?>