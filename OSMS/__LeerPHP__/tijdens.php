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

$map = opendir('.'); #Open de map '.' (huidige map); en sla deze op in $map

while (($file = readdir($dir)) !== false) #tijdens ((bestand = leesmap($map)) NIETGELIJKAAN nee(false))
{
	if ( $file != '.' && $file != '..' ) #als $file is niet '.' en als $file is niet '..' dan ga door
	{
		echo $file . "<br>"; #geef naar scherm $file en <br> (nieuwe lijn)
	} 
}
?>