<?php
session_start();

//check if cookie language is setted already
if ( isset ( $_COOKIE['lang'] ) )
{
  if(file_exists("../languages/" . $_SESSION['lang'] . ".php")) //does the language exists?
  {
    include "../languages/" . $_SESSION['lang'] . ".php";  //if yes then load
  }
  else
  {
    include "../languages/en.php"; //otherwise english
  }
}
else
{
  include "../languages/en.php"; //no cookie?, then english!
}
?>function translate(id) {<?php
    $wo="var myOrginal=new Array(";
    $ow="var myTranslation=new Array(";
foreach($language as $va => $vo)
{
  $wo .= "'" . $va . "',";  
  $ow .= "'" . $vo . "',";  
}

$wo .= "'lol');";
$ow .= "'lol');";

echo $wo . $ow;
?>if (myOrginal.indexOf(id.toLowerCase()) != '-1') {return myTranslation[myOrginal.indexOf(id.toLowerCase())];}else{return id.toLowerCase();}}