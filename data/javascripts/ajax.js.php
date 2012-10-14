// AJAX.JS
// This Code is (c) WDG.P ; Free To use if opensource; non comerical;
// and useable by WDG.P => and all the projects of it.
// WDG.P => http://www.wdgp.nl - WesDeGroot Projects (http://www.wesdegrootprojects.nl)
// WDG.P is the new name of WesDeGroot Projects.
////////////////
// - A.R.R. - //
// - C.I.P. _ //
////////////////
<?php
include "../required/iniFunctions.php";
$cfg = new iniParser("../config/configuration.ini");
$url = $cfg->get("site","url");
?>

function debug(logerror) { 
        if (typeof console != "undefined") { 
            console.log(logerror); 
        } 
} 

function createRequest() {
  try {
    request = new XMLHttpRequest();
  } catch (tryMS) {
    try {
      request = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (otherMS) {
      try {
        request = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (failed) {
        request = null;
      }
    }
  }
  return request;
}


function processAjax(url,tar,title) {
  request = createRequest();
  if(request == null) {
    alert("Unable to Create Request");
    return;
  }
  var nocache = new Date();
  // Add the nocache to the url to make sure it gets updated page...
  url = url + '&stopIEcache='+nocache;
  debug(url);
  request.open("GET",url,true);
  request.onreadystatechange = function() {stateChanged(tar,title)};
  request.send(null);
}


function stateChanged(field,title) {
  if(request.readyState == 4) {
    if(request.status == 200) {
      detailDiv = document.getElementById(field);
      debug("Page:" + request.responseText);
      detailDiv.innerHTML = request.responseText;
      document.getElementById('pagename').innerHTML=title;
      window.location.hash=title;
      document.title = '<?php global $sfg; echo $cfg->getValue('site','name'); ?>: ' + title;
      }
  }
}


function LoadAPage(page,main) {
 LoadAjaxPage(page,main);
}

function LoadAjaxPage(page,main) {
 if ( page.match(main) )
 {
  var page = page.split("/");
  var leng = page.length-1;
  var page = page[leng];

  var pagz = page.split("&");
  var pagz = pagz[0];

  
  document.getElementById('pagename').innerHTML = '<img src=\'<?php echo $url; ?>/data/images/loading.gif\'>&nbsp;Loading Page "' + pagz + '" Please Wait...';
  document.getElementById('main_cont').innerHTML = '<center><h1><center>Loading Page "' + pagz + '" Please Wait...</center></h1><br><img src=\'<?php echo $url; ?>/data/images/ajax_loader.gif\'></center>';
  document.title = '[LOADING: ' + pagz + '] <?php global $sfg; echo $cfg->getValue('site','name'); ?>';

  processAjax ( "<?php echo $url; ?>/" + "index.php?ajaxload&page=" + page, 'main_cont', pagz);
  
  return false;
 }
 else
 {
   return true; // is an external page
 }
}

//AJAX PAGE HASH HANDLER?
var hash=document.location.hash.split("#");
var hash=hash[1]; // means pagename
if (typeof(hash) == "undefined") { var hash='home'; }
setTimeout("LoadAjaxPage('http://home.wdgss.nl/projecten/OSMS/"+hash+"','http://home.wdgss.nl/projecten/OSMS/');", 100)
