<?php
$l = new http();

# DEBUG :/
#   $l->toggledebug();

$l -> connect ( 
                $to        = "rs13.stream24.org", 
                $uri       = "/7.html", 
                $po        = 8640,
                $timeout   = 3,
                $useragent = "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.151 Safari/535.19"
              );
$l -> method  (
                "GET"
              );
$l = $l->exec ( 
                array ( 
                        "" => '' 
                       ) 
              ) ;

echo $l;
?>