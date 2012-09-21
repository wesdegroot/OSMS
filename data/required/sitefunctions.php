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

function siteExists ($what, $file)
{
	switch ( $what )
	{
		case 'Theme':
			return (file_exists('./themes/'.$file.'/theme.php'));		
		break;
		
		case 'Module':
			return (file_exists('./modules/'.$file.'/module.php'));		
		break;
		
		case 'Language':
			return (file_exists('./data/languages/'.$file.'.php'));
		break;
		
		case 'Page':
			return (file_exists('./data/pages/'.$file.'.php'));
		break;
		
		default:
			return false;
		break;		
	}	
}
?>