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
@session_start();
include "../required/iniFunctions.php";
$cfg = new iniParser("../config/configuration.ini");
$url = $cfg->get("site","url");
?>function debug(logerror) { 
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
    alert(translate("Unable to Create Request"));
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
      document.getElementById('pagename').innerHTML=translate(title);
      window.location.hash=title;
      document.title = '<?php global $sfg; echo $cfg->getValue('site','name'); ?>: ' + translate(title);
      }
  }
}


function LoadAPage(page,main) {
 LoadAjaxPage(page,main);
}

function LoadAjaxPage(page,main) {
 var runned=true;
 if ( page.match(main) )
 {
  var page = page.split("/");
  var leng = page.length-1;
  var page = page[leng];

  var pagz = page.split("&");
  var pagz = pagz[0];

  
  document.getElementById('pagename').innerHTML = '<img src=\'<?php echo $url; ?>/data/images/loading.gif\'>&nbsp;' + translate('LOADING') + ' ' + translate('page') + ' "' + translate(pagz) + '" ' + translate('PLEASE WAIT') + '...';
  document.getElementById('main_cont').innerHTML = '<center><h1><center>' + translate('LOADING') + ' ' + translate('PAGE') + ' "' + translate(pagz) + '" ' + translate('PLEASE WAIT') + '...</center></h1><br><img src=\'<?php echo $url; ?>/data/images/ajax_loader.gif\'></center>';
  document.title = '[' + translate('LOADING') + ': ' + pagz + '] <?php global $sfg; echo $cfg->getValue('site','name'); ?>';

  processAjax ( "<?php echo $url; ?>/" + "index.php?ajaxload&page=" + page, 'main_cont', pagz);
  
  return false;
 }
 else
 {
   return true; // is an external page
 }
}

var hash=document.location.hash.split("#");
var hash=hash[1]; // means pagename
if (typeof(hash) == "undefined") { var hash='home'; }

if (typeof(runned) == "undefined") {
  setTimeout("LoadAjaxPage('h<?php echo $url; ?>/"+hash+"','<?php echo $url; ?>');", 500)
}