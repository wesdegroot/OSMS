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

// THIS IS A HTML FILE WITH PHP PARAMETERS
global $url,$cfg;
$url = $cfg->get("site","url");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php global $sfg; echo $cfg->getValue('site','name'); ?></title>

    <link rel="stylesheet" href="themes/default/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

<script type="text/javascript" src="data/javascripts/ajax.js">
    /* WDG.P AJAX CLASS -- © WDG.P 2012 */
</script>

<script type="text/javascript" src="data/javascripts/blink.js"></script>
<script type="text/javascript" src="data/javascripts/framebreaker.js"></script>
<script type="text/javascript" src="data/javascripts/showhide.js"></script>

    <script type="text/javascript" src="themes/default/jquery.js"></script>
    <script type="text/javascript" src="themes/default/script.js"></script>
</head>
<body>
<div id="art-main">
        <div class="art-sheet">
            <div class="art-sheet-tl"></div>
            <div class="art-sheet-tr"></div>
            <div class="art-sheet-bl"></div>
            <div class="art-sheet-br"></div>
            <div class="art-sheet-tc"></div>
            <div class="art-sheet-bc"></div>
            <div class="art-sheet-cl"></div>
            <div class="art-sheet-cr"></div>
            <div class="art-sheet-cc"></div>
            <div class="art-sheet-body">
                <div class="art-header">
                    <div class="art-header-center">
                        <div class="art-header-png"></div>
                        <div class="art-header-jpeg"></div>
                    </div>
                    <div class="art-logo">
                     <table>
                     <tr>
                     <td>
                     <h1 id="name-text" class="art-logo-name"><a href="#"><?php global $sfg; echo $cfg->getValue('site','name'); ?></a></h1>
                     <div id='pagename'></div>
                     </td>
                     <td>

                     </td>
                     </tr>
                     </table>
                     <!-- fixed; absolute; static; relative; -->
                     <div style="right: 15px; top: 30px; position: fixed; z-index: 0;"><a href='[url]?setLang=nl'><img src='[url]data/images/flags/nl.png' alt='nl'></a>&nbsp;<a href='[url]?setLang=en'><img src='[url]data/images/flags/en.png'></a></div>
                    </div>
                </div>
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1">
                          <div class="art-vmenublock">
                              <div class="art-vmenublock-body">
                                          <div class="art-vmenublockcontent">
                                              <div class="art-vmenublockcontent-body">
                                                          <ul class="art-vmenu">
                                                            <?php
echo menu("<li><a href=\"","\"><span class=\"l\"></span><span class=\"r\"></span><span class=\"t\">","</span></a></li>");
                                                            ?>
                                                          </ul>
                                          
                                                <div class="cleared"></div>
                                              </div>
                                          </div>
                                <div class="cleared"></div>
                              </div>
                          </div>
                          <div class="cleared"></div>
                        </div>
                        <div class="art-layout-cell art-content">
                          <div class="art-post">
                              <div class="art-post-body">
                          <div class="art-post-inner art-article">
                                          <div class="art-postcontent">
                                                <div id='main_cont'></div>
                                          </div>
                                          <div class="cleared"></div>
                          </div>
                          
                                <div class="cleared"></div>
                              </div>
                          </div>
                          <div class="art-post">
                              <div class="art-post-body">
                          <div class="art-post-inner art-article"><h2 class="art-postheader"></h2><div class="art-postcontent"></div><div class="cleared"></div></div>
                          
                                <div class="cleared"></div>
                              </div>
                          </div>
                          <div class="cleared"></div>
                        </div>
                    </div>
                </div>
                <div class="cleared"></div>
                <div class="art-footer">
                    <div class="art-footer-t"></div>
                    <div class="art-footer-l"></div>
                    <div class="art-footer-b"></div>
                    <div class="art-footer-r"></div>
                    <div class="art-footer-body">
                        <div class="art-footer-text">
                            FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER                            
                        </div>
                        <div class="cleared"></div>
                    </div>
                </div>
                <div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
        <p class="art-page-footer">&copy; WDG.P &amp; Webvel 2012-<?php echo date("Y"); ?></p>
    </div>
    
</body>
</html>