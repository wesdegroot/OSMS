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

include './data/required/_functions.php'; #_functions is only for the project website (normal users don't use this
									 # it's needed for 3-rd party developers but by beta it's on the github.)

define('APIKey', md5($_SERVER['host']));

// Check Api&Seri
// Getiton http://u.wdgp.nl ((only for developers))

if ( function_exists ( "_apiConnect" ) )
{
	_apiConnect(APIKey);
	_selectTheme();

	if ( isset ( $_POST['theme'], $_POST['author'], $_POST['extra'] ) )
	{
		if ( siteExists ('Theme', $_POST['theme'] ) )
		{
			$themeRaw = _devToolsCompress($_POST['theme']);
			
			if (_apiUpload('Theme', $_POST['theme'], $themeRaw, $_POST['author'], $_POST['extra']))
			{
				echo 'Theme is uploaded!';
			}
			else
			{
				echo 'theme is NOT Uploaded!';
			}
		}
		else
		{
			echo "theme does not exists!";
		}
	}
}
else
{
	echo "Sorry No developer functions installed / no beta version";
}
?>