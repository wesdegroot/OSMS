<?php
 #New Php File
 # Created With  Macbook Pro, 13", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

if ( is_array ( $conf['modules'] ) )
{
foreach($conf['modules'] as $mod => $ule)
{
	if(($mod == $ule || $ule == "true") && file_exists("./modules/" . $mod . "/module.php"))
	{
		include "./modules/" . $mod . "/module.php";
	}
}
}
?>