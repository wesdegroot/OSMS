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

function is__writable($path)
{
        $path = $path . "temp.o";
        if (!($f = fopen($path, 'w+')))
            return false;
        fclose($f);
        unlink($path);
        return true;
}

function lang($l) { return $l; }
$yes = "<font color='green'>" . lang('yes') . "</font>";
$no  = "<font color='red'>"   . lang('no')  . "</font>";

?>
<table>
<tr><td>Username</td><td><input type='text' name='mysql.username'></td><td>[TEST]</td></tr>
<tr><td>Password</td><td><input type='text' name='mysql.password'></td><td>[TEST]</td></tr>
<tr><td>Host</td><td><input type='text' name='mysql.host'></td><td>[TEST]</td></tr>
<tr><td>Database</td><td><input type='text' name='mysql.database'></td><td>[TEST]</td></tr>
<tr><td>Prefix</td><td><input type='text' name='mysql.prefix' value='osms_'></td><td>[TEST]</td></tr>
<tr><td>"Root" User</td><td></td><td>[</td></tr>
<tr><td>Username</td><td><input type='text' name='root.username'></td><td>[TEST]</td></tr>
<tr><td>Password</td><td><input type='password' name='root.password'></td><td>[TEST]</td></tr>
<tr><td>Email</td><td><input type='text' name='root.email'></td><td>[TEST]</td></tr>
<tr><td>File Checks</td><td></td><td></td></tr>
<tr><td>Configuration directory</td><td>./data/</td><td><?php echo (is__writable('data/')) ? $yes : $no; ?></td></tr>
<tr><td>Module directory</td><td>./modules/</td><td><?php echo (is__writable('modules/')) ? $yes : $no; ?></td></tr>
<tr><td>Template directory</td><td>./template/</td><td><?php echo (is__writable('template/')) ? $yes : $no; ?></td></tr>
</table>