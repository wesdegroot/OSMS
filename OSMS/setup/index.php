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

$yes = "<font color='green'><script>document.write(translate('yes'));</script></font>";
$no  = "<font color='red'><script>document.write(translate('no'));</script></font>";

?>
<script type="text/javascript" src="../data/javascripts/lang.js">
</script>
<script type="text/javascript">
function checkLength(e,l,i)
{
    if (e.length == 0)
    {
        document.getElementById(i).innerHTML = "<font color='red'>" + translate('may not be empty') + "</font>";
        document.getElementById(i + ".status").innerHTML = "0";
    }
    else if (e.length < l)
    {
        document.getElementById(i).innerHTML = "<font color='red'>" + translate('To Short') + "</font>";
        document.getElementById(i + ".status").innerHTML = "0";
    }
    else if (e.length < l+2 )
    {
        document.getElementById(i).innerHTML = "<font color='orange'>" + translate('Good') + "</font>";
        document.getElementById(i + ".status").innerHTML = "1";
    }
    else
    {
        document.getElementById(i).innerHTML = "<font color='green'>" + translate('Perfect') + "</font>";   
        document.getElementById(i + ".status").innerHTML = "1";
    }
    document.getElementById(i + ".status").style.display = "none";
    document.getElementById(i + ".status").style.visibility = "hidden";
    checkAll();
}

function checkEmail(e,i)
{
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{1,4})$/;

    if (reg.test(e) == false) {
        document.getElementById(i).innerHTML = "<font color='red'>" + translate('Invalid') + "</font>";
        document.getElementById(i + ".status").innerHTML = "0";
    }
    else
    {
        document.getElementById(i).innerHTML = "<font color='green'>" + translate('Valid') + "</font>";   
        document.getElementById(i + ".status").innerHTML = "1";
    }
    document.getElementById(i + ".status").style.display = "none";
    document.getElementById(i + ".status").style.visibility = "hidden";
    checkAll();
}

function checkAll()
{
    if ( document.getElementById('sqluser.status').innerHTML == 1 &&
         document.getElementById('sqlpass.status').innerHTML == 1 &&
         document.getElementById('sqlhost.status').innerHTML == 1 &&
         document.getElementById('sqldb.status').innerHTML == 1 &&
         document.getElementById('sqlprefix.status').innerHTML == 1 &&
         document.getElementById('usrname.status').innerHTML == 1 &&
         document.getElementById('usrpass.status').innerHTML == 1 &&
         document.getElementById('usrmail.status').innerHTML == 1
       ) {
           document.getElementById('subbutton').disabled = false;
       }
       else
       {
           //alert('ERROR MISSING SOME FIELDS');
           document.getElementById('subbutton').disabled = true;           
       }

       document.getElementById('subbutton').value        = translate('save');
}

function reset()
{
    document.getElementById('sqluser.status').innerHTML   =  '0';
    document.getElementById('sqluser').innerHTML          =  "<font color='red'>" + translate('Resetted') + "</font>";

    document.getElementById('sqlpass.status').innerHTML   =  '0';
    document.getElementById('sqlpass').innerHTML          =  "<font color='red'>" + translate('Resetted') + "</font>";

    document.getElementById('sqlhost.status').innerHTML   =  '1';
    document.getElementById('sqlhost').innerHTML          =  "<font color='red'>" + translate('Resetted') + "</font>";

    document.getElementById('sqldb.status').innerHTML     =  '0';
    document.getElementById('sqldb').innerHTML            =  "<font color='red'>" + translate('Resetted') + "</font>";

    document.getElementById('sqlprefix.status').innerHTML =  '1';
    document.getElementById('sqlprefix').innerHTML        =  "<font color='red'>" + translate('Resetted') + "</font>";

    document.getElementById('usrname.status').innerHTML   =  '0';
    document.getElementById('usrname').innerHTML          =  "<font color='red'>" + translate('Resetted') + "</font>";

    document.getElementById('usrpass.status').innerHTML   =  '0';
    document.getElementById('usrpass').innerHTML          =  "<font color='red'>" + translate('Resetted') + "</font>";

    document.getElementById('usrmail.status').innerHTML   =  '0';
    document.getElementById('usrmail').innerHTML          =  "<font color='red'>" + translate('Resetted') + "</font>";

    document.getElementById('subbutton').disabled         = true;
}
</script>
</head>
<body>

<table>
    <tr>
        <td>
            <script>document.write(translate('MySQL'));</script>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <script>document.write(translate('Username'));</script>
        </td>
        <td>
            <input type='text' name='mysql.username' onfocus="checkLength(this.value,0,'sqluser')" onkeypress="checkLength(this.value,0,'sqluser')">
        </td>
        <td>
            <span id='sqluser'>
                <font color='red'>
                    <script>
                        document.write(translate('may not be empty'));
                    </script>
                </font>
            </span>

            <span id='sqluser.status' style='display:none;visibility:hidden;'></span>
        </td>
    </tr>
    <tr>
        <td>
            <script>document.write(translate('Password'));</script>
        </td>
        <td>
            <input type='text' name='mysql.password' onfocus="checkLength(this.value,0,'sqlpass')" onkeypress="checkLength(this.value,0,'sqlpass')">
        </td>
        <td>
            <span id='sqlpass'>
                <font color='red'>
                    <script>
                        document.write(translate('may not be empty'));
                    </script>
                </font>
            </span>

            <span id='sqlpass.status' style='display:none;visibility:hidden;'></span>
        </td>
    </tr>
    <tr>
        <td>
            <script>document.write(translate('Host'));</script>
        </td>
        <td>
            <input type='text' name='mysql.host' value="localhost" onfocus="checkLength(this.value,0,'sqlhost')" onkeypress="checkLength(this.value,0,'sqlhost')">
        </td>
        <td>
            <span id='sqlhost'>
                <font color='green'>
                    <script>
                        document.write(translate('good'));
                    </script>
                </font>
            </span>

            <span id='sqlhost.status' style='display:none;visibility:hidden;'>1</span>
        </td>
    </tr>
    <tr>
        <td>
            <script>document.write(translate('Database'));</script>
        </td>
        <td>
            <input type='text' name='mysql.database' onfocus="checkLength(this.value,0,'sqldb')" onkeypress="checkLength(this.value,0,'sqldb')">
        </td>
        <td>
            <span id='sqldb'>
                <font color='red'>
                    <script>
                        document.write(translate('May not be empty'));
                    </script>
                </font>
            </span>

            <span id='sqldb.status' style='display:none;visibility:hidden;'></span>
        </td>
    </tr>
    <tr>
        <td>
            <script>document.write(translate('Prefix'));</script>
        </td>
        <td>
            <input type='text' name='mysql.prefix' value='osms_' onfocus="checkLength(this.value,0,'sqlprefix')" onkeypress="checkLength(this.value,0,'sqlprefix')">
        </td>
        <td>
            <span id='sqlprefix'>
                <font color='green'>
                    <script>
                        document.write(translate('Perfect'));
                    </script>
                </font>
            </span>

            <span id='sqlprefix.status' style='display:none;visibility:hidden;'>1</span>
        </td>
    </tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></td>
    <tr>
        <td>
            "<script>document.write(translate('Root'));</script>" <script>document.write(translate('User'));</script>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <script>document.write(translate('Username'));</script>
        </td>
        <td>
            <input type='text' name='root.username' onkeypress="checkLength(this.value,0,'usrname')" onfocus="checkLength(this.value,0,'usrname')">
        </td>
        <td>
            <span id='usrname'>
                <font color='red'>
                    <script>
                        document.write(translate('may not be empty'));
                    </script>
                </font>
            </span>

            <span id='usrname.status' style='display:none;visibility:hidden;'></span>
        </td>
    </tr>
    <tr>
        <td>
            <script>document.write(translate('Password'));</script>
        </td>
        <td>
            <input type='password' name='root.password' onkeypress="checkLength(this.value,6,'usrpass')" onfocus="checkLength(this.value,6,'usrpass')">
        </td>
        <td>
            <span id='usrpass'>
                <font color='red'>
                    <script>
                        document.write(translate('may not be empty'));
                    </script>
                </font>
            </span>

            <span id='usrpass.status' style='display:none;visibility:hidden;'></span>
        </td>
    </tr>
    <tr>
        <td>
            <script>document.write(translate('Email'));</script>
        </td>
        <td>
            <input type='text' name='root.email' onkeypress="checkEmail(this.value,'usrmail')" onfocus="checkEmail(this.value,'usrmail')">
        </td>
        <td>
            <span id='usrmail'>
                <font color='red'>
                    <script>
                        document.write(translate('may not be empty'));
                    </script>
                </font>
            </span>

            <span id='usrmail.status' style='display:none;visibility:hidden;'></span>
        </td>
    </tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></td>
    <tr>
        <td>
            <script>document.write(translate('File Checks'));</script>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <script>document.write(translate('Configuration directory'));</script>
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
            <script>document.write(translate('Module directory'));</script>
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
            <script>document.write(translate('Template directory'));</script>
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
            <script>document.write(translate('Overall directory'));</script>
        </td>
        <td>
            ./
        </td>
        <td>
            <?php echo (is_writeable('../')) ? $yes : $no; ?>
        </td>
    </tr>
    <tr>
        <td><input type='reset' value='reset' onclick='reset();return true;'></td>
        <td></td>
        <td><input id='subbutton' type='submit' value='save' disabled='true'></td>
    </tr>
</table>