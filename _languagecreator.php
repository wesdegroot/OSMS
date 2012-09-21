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
	_selectLanguage();

	if ( isset ( $_POST['language'], $_POST['author'], $_POST['extra'] ) )
	{
		if ( siteExists ('Language', $_POST['language'] ) )
		{
			$languageRaw = _devToolsCompress($_POST['language']);
			
			if (_apiUpload('Language', $_POST['language'], $languageRaw, $_POST['author'], $_POST['extra']))
			{
				echo 'language is uploaded!';
			}
			else
			{
				echo 'language is NOT Uploaded!';
			}
		}
		else
		{
			echo "language does not exists!";
		}
	}
}
else
{
	echo "Sorry No developer functions installed / no beta version";
}
?>