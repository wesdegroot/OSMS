// AJAX.JS

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

    document.getElementById('pagename').innerHTML        = '<img src=\'http://beta.wdgss.nl/template/admin/images/loading.gif\'>Loading Page "' + pagz + '" Please Wait...';

// NEEDS TO STRIP JQUERY AND MAKE A OWN AJAX THING!!!    
$.ajax({
  url: main + "index.php?ajaxload=" + page,
  cache: false,
  success: function(html){
    document.getElementById('wdgss_main_cont').innerHTML=html;
    document.getElementById('pagename').innerHTML=pagz;
    window.location.hash=page;
  }
});
  
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
