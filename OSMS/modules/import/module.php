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
                        'import',
                        'import module - import from old datasource.',
                        array('mod_import_func', 'mod_import_view') //For Help!
                     );

    function mod_import_module_install () {
        // run here "install" commands (e.g. sql, writeconfig)
         $cfg->value("./data/config/configuration.ini", "autoload", "import_module", "false"); //SET AUTO LOAD!!!
         $cfg->value("./data/config/configuration.ini", "mod_imp", "imported", "false"); //Imported?
         $cfg->value("./data/config/configuration.ini", "mod_imp", "itd", date('d-m-Y H:i:s')); //Install Time?
         $cfg->value("./data/config/configuration.ini", "mod_imp", "done", "false"); //_done.SysParameter?
    }

    function mod_import_module_uninstall () {
        // uninstall parameters
    }

    function mod_import_func ( $parameters = null )
    {
        return "implent some functions !!!";
    }

    function mod_import_add( $parameters = array(null, null, null, null ) )
    {
        return false;    
    }

    function mod_import_send ( $id )
    {
        return false;
    }

    function mod_import_edit ( $id, $what = array (null, null) )
    {
        return false;
    }

    function mod_import_check_payments ( $parameters = null )
    {
        return false;
    }

    function mod_import_homepage()
    {
        return "This will become the homepage";
    }
    
    function mod_import_view ()
    {
        if ( !isset ( $_GET['mac'] ) )
            $_GET['mac']=null;

            switch ( $_GET['mac'] )
            {
                case 'test':
                    echo "test.";
                break;

                default:
                    echo mod_import_homepage();
                break;
            }
        
        //return "this comes on the website..." . mod_import_func();
    }

?>