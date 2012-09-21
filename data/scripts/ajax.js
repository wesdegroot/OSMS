// AJAX.JS
// This Code is (c) WDG.P ; Free To use if opensource; non comerical;
// and useable by WDG.P => and all the projects of it.

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
  request.open("GET",url,true);
  request.onreadystatechange = function() {stateChanged(tar,title)};
  request.send(null);
}


function stateChanged(field,title) {
  if(request.readyState == 4) {
    if(request.status == 200) {
      detailDiv = document.getElementById(field);
      detailDiv.innerHTML = request.responseText;
      document.getElementById('pagename').innerHTML=title;
      window.location.hash=title;
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

  
  document.getElementById('pagename').innerHTML = '<img src=\'images/loading.gif\'>Loading Page "' + pagz + '" Please Wait...';
  processAjax ( main + "index.php?ajaxload=" + page, 'main_cont', pagz);
  
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
setTimeout("LoadAjaxPage('http://beta.wdgss.nl/page/"+hash+"','http://beta.wdgss.nl/');", 100)
