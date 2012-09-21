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
					'themedownloader',
					'this is the theme downloader',
					array('unpack','install','download','buy','upload')
				 );

function themedownloader_unpack($parameters)
{
	return true;
}

function themedownloader_install($parameters)
{
	return false;
}

function themedownloader_download($parameters)
{
	return false;
}

function themedownloader_buy($parameters)
{
	return false;
}

function themedownloader_upload($parameters)
{
	return false;
}

?>