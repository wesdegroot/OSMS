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
if ( $_SERVER['REQUEST_URI'] == "/projecten/OSMS/setup/")
 header("location: http://osms.wdgp.nl/setup/");
 
function is__writable($path)
{

    if ($path{strlen($path)-1}=='/')
        
        return is__writable($path.uniqid(mt_rand()).'.tmp');
    
    elseif (file_exists($path) && ereg('.tmp', $path))
    {
        
        if (!($f = @fopen($path, 'w+')))
            return false;
        fclose($f);
        unlink($path);
        return true;

    }
    else
        return false; // Or return error - invalid path...
}

function lang($l) { return $l; }
$yes = "<font color='green'>" . lang('yes') . "</font>";
$no  = "<font color='red'>"   . lang('no')  . "</font>";

?>
<script type="text/javascript">
function checkLength(e,l,i)
{
if (e.length < l) {
    document.getElementById(i).innerHTML = "<font color='red'>To Short</font>";
}
else if (e.length < l+4 )
{
    document.getElementById(i).innerHTML = "<font color='orange'>Good</font>";   
}
else
{
    document.getElementById(i).innerHTML = "<font color='green'>Perfect</font>";   
}
}

function checkEmail(e,i)
{
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

if (reg.test(e) == false) {
    document.getElementById(i).innerHTML = "<font color='red'>Invalid</font>";
}
else
{
    document.getElementById(i).innerHTML = "<font color='green'>Valid</font>";   
}
}
</script>
</head>
<body>

<p>A function is triggered when the user is pressing a key in the input field. The function alerts the key pressed.</p>

<table>
    <tr>
        <td>
            Username
        </td>
        <td>
            <input type='text' name='mysql.username'>
        </td>
        <td>
            [TEST]
        </td>
    </tr>
    <tr>
        <td>
            Password
        </td>
        <td>
            <input type='text' name='mysql.password'>
        </td>
        <td>
            [TEST]
        </td>
    </tr>
    <tr>
        <td>
            Host
        </td>
        <td>
            <input type='text' name='mysql.host'>
        </td>
        <td>
            [TEST]
        </td>
    </tr>
    <tr>
        <td>
            Database
        </td>
        <td>
            <input type='text' name='mysql.database'>
        </td>
        <td>
            [TEST]
        </td>
    </tr>
    <tr>
        <td>
            Prefix
        </td>
        <td>
            <input type='text' name='mysql.prefix' value='osms_' onfocus="checkLength(this.value,0,'sqlprefix')" onkeypress="checkLength(this.value,0,'sqlprefix')">
        </td>
        <td>
            <span id='sqlprefix'></span>
        </td>
    </tr>
    <tr>
        <td>
            "Root" User
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            Username
        </td>
        <td>
            <input type='text' name='root.username'>
        </td>
        <td>
            [TEST]
        </td>
    </tr>
    <tr>
        <td>
            Password
        </td>
        <td>
            <input type='password' name='root.password' onkeypress="checkLength(this.value,6,'usrpass')" onfocus="checkLength(this.value,6,'usrpass')">
        </td>
        <td>
            <span id='usrpass'></span>
        </td>
    </tr>
    <tr>
        <td>
            Email
        </td>
        <td>
            <input type='text' name='root.email' onkeypress="checkEmail(this.value,'usrmail')" onfocus="checkEmail(this.value,'usrmail')">
        </td>
        <td>
            <span id='usrmail'></span>
        </td>
    </tr>
    <tr>
        <td>
            File Checks
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            Configuration directory
        </td>
        <td>
            ./data/
        </td>
        <td>
            <?php echo (is_writeable('../data/')) ? $yes : $no; ?>
        </td>
    </tr>
    <tr>
        <td>
            Module directory
        </td>
        <td>
            ./modules/
        </td>
        <td>
            <?php echo (is_writeable('../modules/')) ? $yes : $no; ?>
        </td>
    </tr>
    <tr>
        <td>
            Template directory
        </td>
        <td>
            ./themes/
        </td>
        <td>
            <?php echo (is_writeable('../themes/')) ? $yes : $no; ?>
        </td>
    </tr>
    <tr>
        <td>
            Overall directory
        </td>
        <td>
            ./
        </td>
        <td>
            <?php echo (is_writeable('../')) ? $yes : $no; ?>
        </td>
    </tr>
</table>