<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

$module[] = array(
					'testformodule',
					'this is the description',
					array('functionnameone','functionnametwo')
				 );

fuction testformodule_functionnameone($parameters)
{
	return true;
}

fuction testformodule_functionnametwo($parameters)
{
	return false;
}
?>