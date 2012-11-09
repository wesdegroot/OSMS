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
                        'maps',
                        'maps module',
                        array('mod_maps_func', 'mod_maps_view') //For Help!
                     );

    function mod_maps_module_install () {
        // run here "install" commands (e.g. sql, writeconfig)
         $cfg->value("./data/config/configuration.ini", "autoload", "maps_module", "false"); //SET AUTO LOAD!!!
    }

    function mod_maps_module_uninstall () {
        // uninstall parameters
    }

    function mod_maps_view()
    {
        global $conf;
        echo "<iframe src=\"" . $conf['site']['url'] . "?page=maps&ajaxload\" width=\"100\" height=\"100\"></iframe>";
    }


//mod_maps_view();

?>