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

function isLoggedin()
{
    return (isset($_SESSION['login'])) ? true : false;
}

function checkHijack()
{
    return ( $_SERVER['REMOTE_ADDR'] != $_SESSION['ip'] ) ? true : false;
}

function memberLogin($user, $pass)
{
    return false;
}

function memberRegister($user, $pass, $email)
{
    return false;
}

function memberLogout()
{
    session_destroy();
}

function memberUpdate($what, $value)
{
    return false;
}

function memberRights()
{
    // bitwise, or just statusses?
}

function memberMayDo($level)
{
    // ^ same as above ^
}

function memberUselessFunction($just,$for,$fun)
{
    return 'JJF';
}
?>