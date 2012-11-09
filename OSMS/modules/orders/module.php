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
                        'orders',
                        'orders module',
                        array('mod_orders_func', 'mod_orders_view') //For Help!
                     );

    function mod_orders_module_install () {
        // run here "install" commands (e.g. sql, writeconfig)
         $cfg->value("./data/config/configuration.ini", "autoload", "orders_module", "false"); //SET AUTO LOAD!!!
    }

    function mod_orders_module_uninstall () {
        // uninstall parameters
    }

    function mod_orders_func ( $parameters = null )
    {
        return "implent some functions !!!";
    }

    function mod_orders_add( $parameters = array(null, null, null, null ) )
    {
        return false;    
    }

    function mod_orders_send ( $id )
    {
        return false;
    }

    function mod_orders_edit ( $id, $what = array (null, null) )
    {
        return false;
    }

    function mod_orders_check_payments ( $parameters = null )
    {
        return false;
    }

    function mod_orders_homepage()
    {
        return "This will become the homepage";
    }
    
    function mod_orders_view ()
    {
        if ( isset ( $_GET['mac'] ) )
        {
            switch ( $_GET['mac'] )
            {
                case 'test':
                    return "test.";
                break;

                default:
                    return mod_orders_homepage();
                break;
            }
        }
        //return "this comes on the website..." . mod_orders_func();
    }

?>