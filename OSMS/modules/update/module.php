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
 
if ( !defined ( 'MOD_LOADED_UPDATE') ) 
{
	$module[] = array(
						'update',
						'update module',
						array(null, null) //hidden only system callable functions
					 );

	function update_url   () 
	{
		return "http://a.wdgp.nl/product/OSMS/{version}";
	}

	function update_check ()
	{
		global $cfg;
		return false; //No Updates ;)
		if ( preg_match("/UPD/", $cont=@file_get_contents ( update_url() ) ) )
		{
			echo "Updates Avaible";
			$cfg->value("./data/configuration/configuration.ini", "update", "updates", "YES");
			$cfg->value("./data/configuration/configuration.ini", "update", "update_check", date("d.m.Y"));			
		}
		else
		{
			$cfg->value("./data/configuration/configuration.ini", "update", "updates", "NO");
			$cfg->value("./data/configuration/configuration.ini", "update", "update_check", date("d.m.Y"));
		}
	}

	function update_get ()
	{
		global $cfg;
		return true; //Updated....
		$upd_ver=fgc(update_url()."/version");
		$cfg->value("./data/configuration/configuration.ini", "update", "update_version", $upd_ver);

		$update = unserialize(file_get_contents(update_url() . '/update'));
		if ( is_writeable ( $update['file'] ) )
			{
				// update

				$cfg->value("./data/configuration/configuration.ini", "system", "version", $upd_ver);
				return array(true, lang('mod_update_updated_to', $upd_ver));
			}
		else
			{
				return array(false, lang('mod_update_not_writeable', $update['file']));
			}
	}

	function update_diff()
	{
		return null;
	}

	function update_backup($file)
	{
		// must implent
	}
	define('MOD_LOADED_UPDATE', true);
}
else {
	header('location: '.$murl.'index');
}
?>