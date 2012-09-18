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

$module[] = array(
					'cloud',
					'cloud module; store your configuration on our \'cloud\' server',
					array(null, null) //hidden only system callable functions
				 );

function cloud_save_config ( $configuration )
{
	$status = false;
	return $status;
}

function cloud_get_config ( $date )
{
	$status = false;
	return $status;
}

function cloud_get_config_parameter ( $configuration )
{
	$status = false;
	return $status;
}

function cloud_login ( $user, pass )
{
	// if login is OK Then
	saveConfig('config/cloud.php', 'cloud', 'sessionid', $sessionid);
	saveConfig('config/cloud.php', 'cloud', 'expires',   $expiredat);
}

function cloud_register ( $user, pass, $email )
{
	return false;
}

function cloud_enabled ()
{
	global $configuration;
	if (readConfig('cloud','enabled'])) // Check if cloud is turned on.
	{
		return true;
	}
	else
	{
		return false;
	}
}
?>