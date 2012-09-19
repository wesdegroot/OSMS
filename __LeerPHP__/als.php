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

// als url is: 
// http://www.domein.com/pagina.php?iets=lala

if ( isset ( $_GET['iets'] ) ) #als "bestaat" $_GET['iets']
{							   # $_GET['iets'] = ?iets=lala

	echo "?iets bestaat!!!!!<br>"; # iets bestaat zij de "if" hierboven ^^^

	if ( $_GET['iets'] == 'lala' ) # iets = lala
	{
		echo "?iets=lala!!!"; #geef de waarde op het scherm
	} 
}

?>