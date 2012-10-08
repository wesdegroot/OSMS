<?php
 #New Php File
 # Created With  Macbook Pro, 13", Late 2011
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

$cfg              = new iniParser("./data/config/configuration.ini");
$config           = array();
$conf['database'] = $cfg->get("database");
$conf['site']     = $cfg->get("site");
$conf['system']   = $cfg->get("system");
$conf['setup']    = $cfg->get("setup");
$conf['cloud']    = $cfg->get("cloud");
$conf['modules']  = $cfg->get("autoload");

?>