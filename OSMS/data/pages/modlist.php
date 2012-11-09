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

$dir = opendir('./modules/');

while(($file = readdir($dir)) !== false) {
    if ($file != '.' && $file != '..' && $file != "@eaDir" && is_dir("./modules/".$file) )
    {
        echo "<a href='#' onclick=\"LoadAjaxPage('http://home.wdgss.nl/projecten/OSMS/{$file}','http://home.wdgss.nl/projecten/OSMS/');\">{$file}</a><br>";
    }
}

?>