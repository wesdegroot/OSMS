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

define('language', 'nl');

if(file_exists("./data/languages/" . language . '.php'))
{
    include "./data/languages/" . language . '.php';
}else{ exit('MISSING TRANSLATION'); }

if ( is_array ( $conf['modules'] ) )
{
foreach($conf['modules'] as $mod => $ule)
{
    if(file_exists("./modules/" . $mod . "/lang/" .language . ".php"))
    {
        include "./modules/" . $mod . "/lang/" .language . ".php";
    }
}
}

function systemVersion () {
$info = array(
    "System Info"      => "-",
    "Version"          => "0.0.0.1",
    "Websites"         => "<a href='http://home.wdgss.nl/projecten/OSMS' target='_blank'>Demo Website</a>, <a href='http://home.wdgss.nl/projecten/OSMS' target='_blank'>Download Website</a>, <a href='https://github.com/wesdegroot/OSMS/issues' target='_blank'>Support Website</a>",
    "Authors"          => "Wesley De Groot (WDG.P) [<a href='http://www.wdgp.nl' target='_blank'>homepage</a>]<br>
                           Edwin Huijboom (WebVel) [<a href='http://www.webvel.nl' target='_blank'>homepage</a>]",
    
    "Language Info"    => "-",
    "Language"         => lang('_lang'),
    "Translator(s)"    => lang('_translator'),
    "Version"          => lang('_version')
);

$valve  = "<table>";
foreach($info as $title => $value)
{
    if ( $value == "-" )
    {
        $valve .= "</table><h3>" . lang($title) . "</h3><table>";
    }
    else
    {
        $valve .= "<tr><td>" . lang($title) . "</td><td>" . $value . "</td></tr>";
    }
    unset($title,$value);
}
$valve .= "</table>";

return $valve;
}

function siteExists ($what, $file)
{
	switch ( $what )
	{
		case 'Theme':
			return (file_exists('./themes/'.$file.'/theme.php'));		
		break;
		
		case 'Module':
			return (file_exists('./modules/'.$file.'/module.php'));		
		break;
		
		case 'Language':
			return (file_exists('./data/languages/'.$file.'.php'));
		break;
		
		case 'Page':
			return (file_exists('./data/pages/'.$file.'.php'));
		break;
		
		default:
			return false;
		break;		
	}	
}

function fgc ( $fgc )
{
	return file_get_contents ( $fgc );
}

function lang (
					 $str = false,
					 $p01 = false, 
				     $p02 = false, 
				     $p03 = false, 
				     $p04 = false, 
				     $p05 = false, 
				     $p06 = false, 
				     $p07 = false, 
				     $p08 = false, 
				     $p09 = false, 
				     $p10 = false, 
				     $p11 = false, 
				     $p12 = false, 
				     $p13 = false, 
				     $p14 = false, 
				     $p15 = false
			   )
{
	global $language;
	$str=strtolower($str);
	
	if ( $p15 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02, $p03, $p04, $p05, $p06, $p07, $p08, $p09, $p10, $p11, $p12, $p13, $p14, $p15);
	}
	elseif ( $p14 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02, $p03, $p04, $p05, $p06, $p07, $p08, $p09, $p10, $p11, $p12, $p13, $p14);
	}
	elseif ( $p13 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02, $p03, $p04, $p05, $p06, $p07, $p08, $p09, $p10, $p11, $p12, $p13);
	}
	elseif ( $p12 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02, $p03, $p04, $p05, $p06, $p07, $p08, $p09, $p10, $p11, $p12);
	}
	elseif ( $p11 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02, $p03, $p04, $p05, $p06, $p07, $p08, $p09, $p10, $p11);
	}
	elseif ( $p10 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02, $p03, $p04, $p05, $p06, $p07, $p08, $p09, $p10);
	}
	elseif ( $p09 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02, $p03, $p04, $p05, $p06, $p07, $p08, $p09);
	}
	elseif ( $p08 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02, $p03, $p04, $p05, $p06, $p07, $p08);
	}
	elseif ( $p07 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02, $p03, $p04, $p05, $p06, $p07);
	}
	elseif ( $p06 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02, $p03, $p04, $p05, $p06);
	}
	elseif ( $p05 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02, $p03, $p04, $p05);
	}
	elseif ( $p04 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02, $p03, $p04);
	}
	elseif ( $p03 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02, $p03);
	}
	elseif ( $p02 != false )
	{
		$retval = sprintf(@$language[$str], $p01, $p02);
	}
	elseif ( $p01 != false )
	{
		$retval = sprintf(@$language[$str], $p01);
	}
	else
	{
		$retval = sprintf(@$language[$str]);
	}

	if ( $str == '_debug' ) {
		var_dump($language);
	}
	else
	{
		if ( !empty ( $retval ) )
		{
			return $retval;
		}
		else
		{
			return $str;
		}
	}
}
?>