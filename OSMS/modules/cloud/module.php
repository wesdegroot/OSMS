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

function cloud_save_config ( $configuration = null )
{
	//SAVE TO CLOUD
	return false;
}

function cloud_get_config ( $file = 'configuration.ini', $parameter = null )
{
	//GET FROM CLOUD
	return false;
}

function cloud_get_config_parameter ( $parameter )
{
	$cfg = new iniParser("./data/config/cloud.ini");
	return $cfg->get('cloud',$parameter);
}

function cloud_login ( $user, $pass )
{
	// if login is OK Then
//	saveConfig('files/config/cloud.php', 'cloud', 'sessionid', $sessionid);
//	saveConfig('files/config/cloud.php', 'cloud', 'expires',   $expiredat);
	$cfg = new iniParser("./data/config/cloud.ini");
	$cfg->setValue('cloud','username', $user);
	$cfg->setValue('cloud','password', $pass);
	$cfg->setValue('cloud','session', $session);
	$cfg->setValue('cloud','expires', $expires);
	$cfg->setValue('cloud','enabled', '1');
	$cfg->save();
}

function cloud_register ( $user, $pass, $email )
{
	return false;
}

function cloud_enabled ()
{
	global $config;
	$cfg = new iniParser("./data/config/cloud.ini");
	if ($cfg->get('cloud','enabled')) // Check if cloud is turned on.
	{
		return true;
	}
	else
	{
		return false;
	}
}
?>