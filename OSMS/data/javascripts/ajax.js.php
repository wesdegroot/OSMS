<?php
@session_start();
include "../required/iniFunctions.php";
$cfg = new iniParser("../config/configuration.ini");
$url = $cfg->get("site","url");
?>/*
              ```      `::`                        
          `.:.///:`   /::.                        
         `/:`......  `.`        ``.`             
         ./-.-.....-           `......`           
         `/......`.`           .......`           
           .::....              `....`            
                          ///.......`              
                         ..:.......:+`            
        ```              `/.......`/.             
      .:.....`            /..   `/`s`             
     .:........           /-.   `/`s`             
     ::........           :..   `-`s.             
     `........           -+``    ::/o`            
        ````            .s`       :/++            
                       .s`         :-/o`          
                      `o-  `..:::....`:o          
                      .o.osyhhhhhhhhyo//o`       
                     /oshhhhhhhhhyyhhdds:o`      
                    :oyhysssssooooooosyhy:+`     
                   .++hyssoooooooooooosyhs..      
                  .:.yhyysssooooooooosyyhy...     
                  `/:.:+syyhhhhhhhhhhhyyo//+..`   
                    `.:://+oooosssssso+/++:..``   
                         `....:::....`````        

                        WesDeGroot Projects
                               By
                          Wesley De Groot


                (c) 2001-2012, WesDeGroot Projects
             
                  http://www.wdgp.nl/#conditions
                      ^ Terms & Conditions ^
                         Please Read Them.

*/

/////////////////////////////////////////////////////////////////////////////////////////////
// AJAX.JS                                                                                 //
// This Code is (c) WDG.P ; Free To use if opensource; non comerical;                      //
// and useable by WDG.P => and all the projects of it.                                     //
// WDG.P => http://www.wdgp.nl - WesDeGroot Projects (http://www.wesdegrootprojects.nl)    //
// WDG.P is the new name of WesDeGroot Projects.                                           //
/////////////////////////////////////////////////////////////////////////////////////////////
// - © WDG.P 2001-2012                                              All Rights Reserved. - //
/////////////////////////////////////////////////////////////////////////////////////////////

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
      detailDiv.innerHTML = request.responseText;
      document.getElementById('pagename').innerHTML=translate(title);
      window.location.hash=title;
      document.title = '<?php global $sfg; echo $cfg->getValue('site','name'); ?>: ' + translate(title);
      //initAjax(request.responseText);
      }
  }
}
function executeScript(str)
{
    var h = document.getElementsByTagName('head');      
    var tempDiv = document.createElement("div");
    tempDiv.innerHTML = unescape(str);  
    var domScript = tempDiv.firstChild;    
    h[0].appendChild(domScript);
}
  executeScript(escape('<script src="a.js"><\/script>'));

function initAjax(strcode)  
{
  var scripts = new Array();

  while(strcode.indexOf("<script") > -1 || strcode.indexOf("</script") > -1) {
    var s = strcode.indexOf("<script");
    var s_e = strcode.indexOf(">", s);
    var e = strcode.indexOf("</script", s);
    var e_e = strcode.indexOf(">", e);
    
    scripts.push(strcode.substring(s_e+1, e));
    strcode = strcode.substring(0, s) + strcode.substring(e_e+1);
  }
  
  for(var i=0; i<scripts.length; i++) {
    try {
      eval(scripts[i]);
    }
    catch(ex) {
      debug('failed to run JavaScript');
      debug("JS: " + scripts[i] + "EX: " + ex);
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
  setTimeout("LoadAjaxPage('<?php echo $url; ?>/"+hash+"','<?php echo $url; ?>');", 500)
}