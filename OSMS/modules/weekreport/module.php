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
                        'weekreport',
                        'weekreport module',
                        array('mod_weekreport_func', 'mod_weekreport_view') //For Help!
                     );

    function mod_weekreport_module_install () {
        // run here "install" commands (e.g. sql, writeconfig)
         $cfg->value("./data/config/configuration.ini", "autoload", "weekreport_module", "false"); //SET AUTO LOAD!!!
    }

    function mod_weekreport_module_uninstall () {
        // uninstall parameters
    }

    function mod_weekreport_func ( $parameters = null )
    {
        return "implent some functions !!!";
    }

    function mod_weekreport_view ()
    {
        return "this comes on the website..." . mod_weekreport_func();
    }

    echo mod_weekreport_view();
?>