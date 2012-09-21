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

/// MUST BE MADE :)

class superclass
{
	public function loadPage($page)
	{
		include './data/pages/' . $page . '.php';
	}
	public function loadStyle($some)
	{
		// EMPTY
	}
	public function getConfig($some)
	{
		// EMPTY
	}

	public function isMobile()
	{
		return false; // no mobile dedection yet.
	}
	
	public function finish()
	{
		echo "<hr>Footer";
	}
}

?>