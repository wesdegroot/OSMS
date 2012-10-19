<?php
if ( isset ( $_SESSION['lang'] ) )
{
  include "../languages/" . $_SESSION['lang'] . ".php";  
}
else
{
  include "../languages/en.php";
}
?>function translate(id) {<?php
$wo="\r\nvar myOrginal=new Array(";
$ow="var myTranslation=new Array(";
foreach($language as $va => $vo)
{
  $wo .= "\"" . $va . "\",";  
  $ow .= "\"" . $vo . "\",";  
}

$wo .= "\"lol\");";
$ow .= "\"lol\");";

echo $wo . "\n\r" . $ow . "\r\n";
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
?>