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
					'update',
					'update module',
					array(null, null) //hidden only system callable functions
				 );

function update_url   () 
{
	return "http://u.wdgp.nl/product/OSMS/{version}";
}

function update_check ()
{
	return false; //No Updates ;)
}

function update_get ()
{
	return true; //Updated....
}

function update_diff()
{
	return null;
}

function update_backup($file)
{
	// must implent
}

?>