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

// DeveloperTools
// Please normal users don't use this!
// We do not give support on this file!!!
// We answer no questions about this code/ or the api/ update code.

if ( defined ( 'DevToolsInstalled' ) )
{
	// Here All the DevTools :)
	function _apiConnect ( $apiKey )
	{
		// Connect To the API ;)
		// a.wdgp.nl?
		// check if key is ok ;)
		return false;
	}

	function _devToolsDecompress ( $fileToDecompress )
	{
		// General PackFunction
		return gzdecode($fileToDecompress);
	}	

	function _devToolsCompress ( $fileToCompress, $lvl = 9 )
	{
		// General PackFunction
		return gzencode($fileToCompress, $lvl);
	}

	function _devToolsEncode ( $files )
	{
		return ascii2hex($files,null,"\\x");
	}

	function _devToolsDecode ( $files )
	{
		return hex2ascii($files);
	}

	function _apiUpload($what, $name, $raw, $creator, $extra, $apiKey='Required:ApiKey:True')
	{
		// if all things are ok, then upload it :P
		// OPEN HTTP Connection And POST (UPLOAD IT)
		if ( _apiConnect($apiKey) ) #maybe i hold this check, maybe not
		{ //double check ;)... and down to the server also an check..
			
		}
	}

	function _selectTheme () 
	{
		//Theme Selector	
	}


	function ascii2hex($ascii,$af=" ",$bef="\\x") 
	{
  		$hex = '';
  		for ($i = 0; $i < strlen($ascii); $i++)
  			{
    			$byte = strtoupper(dechex(ord($ascii{$i})));
    			$byte = str_repeat('0', 2 - strlen($byte)).$byte;
    			$hex .= $bef . $byte . $af;
  			}
  		return $hex;
	}

	function hex2ascii($hex)
	{
		$ascii='';
		$hex=str_replace(" ", "", $hex);
		for($i=0; $i<strlen($hex); $i=$i+2)
			{
				$ascii .= chr(hexdec(substr($hex, $i, 2)));
			}
		return($ascii);
	}

}
?>