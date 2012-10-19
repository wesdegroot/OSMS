<?php
if ( isset ( $_COOKIE['lang'] ) )
{
  if(file_exists("../languages/" . $_COOKIE['lang'] . ".php"))
  {
    include "../languages/" . $_COOKIE['lang'] . ".php";  
  }
  else
  {
    include "../languages/en.php";   
  }
}
else
{
  include "../languages/en.php";
}
?>function translate(id) {<?php
    $wo="\r\n\tvar myOrginal=new Array(";
    $ow="var myTranslation=new Array(";
foreach($language as $va => $vo)
{
  $wo .= "\"" . $va . "\",";  
  $ow .= "\"" . $vo . "\",";  
}

$wo .= "\"lol\");";
$ow .= "\"lol\");";

echo $wo . "\n\r\t" . $ow . "\r\n";
?>

    if (myOrginal.indexOf(id.toLowerCase()) != "-1")
    {
        return myTranslation[myOrginal.indexOf(id.toLowerCase())];
    }
    else
    {
        return id.toLowerCase();
    }
}