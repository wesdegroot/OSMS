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

//require "./data/config/configuration.php";
require "./data/required/iniFunctions.php";
require "./data/required/readConfig.php";
require "./data/required/httpClass.php";

// check system files
require "./data/required/loadModules.php";
require "./modules/agenda/module.php";
require "./modules/update/module.php";
require "./modules/cloud/module.php";
require "./data/required/templateparser.php";
require "./data/required/corefunctions.php";
require "./data/required/sitefunctions.php";
require "./data/required/memberFunctions.php";

// load ("enabled" modules)
# MUST BUILT IN TO THE SYSYEM...
?>