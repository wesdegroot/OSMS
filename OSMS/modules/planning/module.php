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

    $module[] = array(
                        'planning',
                        'plannings module',
                        array('mod_planning_func', 'mod_planning_view') //For Help!
                     );

    function mod_planning_module_install () {
        // run here "install" commands (e.g. sql, writeconfig)
         $cfg->value("./data/config/configuration.ini", "autoload", "planning_module", "false"); //SET AUTO LOAD!!!
    }

    function mod_planning_module_uninstall () {
        // uninstall parameters
         $cfg->value("./data/config/configuration.ini", "autoload", "planning_module_ui", "true"); //SET AUTO LOAD!!!
         $cfg->value("./data/config/configuration.ini", "autoload", "planning_module", "false"); //SET AUTO LOAD!!!
         $cfg->value("./data/config/configuration.ini", "mainmenu", "planning_module", "false"); //SET AUTO LOAD!!!
    }

    function mod_planning_view()
    {
        echo "Hier komt planning gebeuren Beta test. [ps. iframe]?";
    }
//Select a item.
?>