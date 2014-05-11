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

?><pre><?php

require "../files/required/iniFunctions.php";

$cfg = new iniParser("../files/config/config.ini");

$name = $cfg->get("system","language")." ".$cfg->get("system","test");
echo $name . "<hr>";

$tool = $cfg->get("database");
print_r($tool);
$cfg->setValue("test","version", "0.1");
$cfg->setValue("last","edit",date("D.m.Y H:i:s"));
print_r($cfg);

if($cfg->save())
 echo "<hr>Saved";
else
 echo "<HR>ERROR";

?>