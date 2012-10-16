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

?>
Some intresting information :) (about the system)<br><br>
<?php

function systemVersion () {
$info = array(
    "System Info"  => "-",
    "Version"      => "0.0.0.1",
    "Website"      => "http://home.wdgss.nl/projecten/OSMS",
    "Author"       => "Wesley De Groot (WDG.P) [<a href='http://www.wdgp.nl' target='_blank'>homepage</a>]<br>
                       Edwin Huijboom (WebVel) [<a href='http://www.webvel.nl' target='_blank'>homepage</a>]",
    
    "Language"   => "-",
    "Language"   => lang('_lang'),
    "Translator" => lang('_translator'),
    "Version"    => lang('_version')
);

$valve  = "<table>";
foreach($info as $title => $value)
{
    if ( $value == "-" )
    {
        $valve .= "</table><br><h3><center>" . lang($title) . "</center></h3><br><table>";
    }
    else
    {
        $valve .= "<tr><td>" . lang($title) . "</td><td>" . $value . "</td></tr>";
    }
    unset($title,$value);
}
$valve .= "</table>";

return $valve;
}

echo systemVersion();
?>