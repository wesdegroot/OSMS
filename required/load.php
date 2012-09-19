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

require "./config/configuration.php";

// check system files
require "./modules/agenda/module.php";
require "./modules/update/module.php";
require "./modules/cloud/module.php";
require "./require/templateparser.php";

// load ("enabled" modules)
# MUST BUILT IN TO THE SYSYEM...
?>