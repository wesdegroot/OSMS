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
                        'invoices',
                        'invoices module',
                        array('mod_invoices_func', 'mod_invoices_view') //For Help!
                     );

    function mod_invoices_module_install () {
        // run here "install" commands (e.g. sql, writeconfig)
         $cfg->value("./data/config/configuration.ini", "autoload", "invoices_module", "false"); //SET AUTO LOAD!!!
    }

    function mod_invoices_module_uninstall () {
        // uninstall parameters
    }

    function mod_invoices_func ( $parameters = null )
    {
        return "implent some functions !!!";
    }

    function mod_invoices_add( $parameters = array(null, null, null, null ) )
    {
        return false;    
    }

    function mod_invoices_send ( $id )
    {
        return false;
    }

    function mod_invoices_edit ( $id, $what = array (null, null) )
    {
        return false;
    }

    function mod_invoices_check_payments ( $parameters = null )
    {
        return false;
    }

    function mod_invoices_homepage()
    {
        return "This will become the homepage";
    }
    
    function mod_invoices_view ()
    {
        if ( isset ( $_GET['mac'] ) )
        {
            switch ( $_GET['mac'] )
            {
                case 'test':
                    return "test.";
                break;

                default:
                    return mod_invoices_homepage();
                break;
            }
        }
        //return "this comes on the website..." . mod_invoices_func();
    }

?>