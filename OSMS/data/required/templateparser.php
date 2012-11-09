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

/// MUST BE MADE :)
function menu($pa1,$pa2,$pa3)
{
 global $url,$conf;
 
 $menu=array();

if ( is_array ( $conf['menu'] ) )
{
	foreach($conf['menu'] as $title => $url)
		{
			$title = preg_replace("#_#", " ", $title);
			$menu[] = array(lang($title), $url);
		}
}

/*
for($i=0; $i<101; $i++)
{
 if($i < 10)
  $i= 0 . $i;

 if($i < 100)
  $i= 00 . $i;

 $menu[] = array('item ' . $i, 'item'.$i);
}
*/

 for($i=0; $i<sizeof($menu); $i++)
 {
 	$menu[$i][1] = preg_replace("#\{url\}#", $conf['site']['url'], $menu[$i][1]);
  	if (!preg_match("#http\://#", $menu[$i][1]))
 	{
	 	$ajaxstr = "onclick=\"LoadAjaxPage('{$conf['site']['url']}{$menu[$i][1]}','{$conf['site']['url']}');";
 		echo $pa1 . "#\"" . $ajaxstr . $pa2 . $menu[$i][0] . $pa3;
 	}
 	else
 	{
 		echo $pa1 . $menu[$i][1] . "\" target=\"_blank" . $pa2 . $menu[$i][0] . $pa3;
 	}
 	echo "\r\n";
 }	
}

class superclass
{
	var $returning = "test";

	public function loadPage($page)
	{
		global $config, $cfg;
		if ( file_exists ('./data/pages/' . $page . '.php') )
			{
				ob_start();
				include './data/pages/' . $page . '.php';
				$page = ob_get_contents();
				ob_end_clean();
				$page = preg_replace("#\[translate\:\"(.*?)\"\]#si", lang(strtolower("\\1")), $page);
				return $page;
			}
		elseif ( file_exists ('./modules/' . $page . '/module.php') )
			{
				ob_start();
				include './modules/' . $page . '/module.php';
				$page = ob_get_contents();
				ob_end_clean();

				if(function_exists("module_" . $page . "_view"))
				 { $page = call_user_func("module_".$page."_view"); }

				$page = preg_replace("#\[translate\:\"(.*?)\"\]#si", lang(strtolower("\\1")), $page);
				return $page;
			}
		else
			{
				return "<h1>Sorry, But the page \"{$page}\" does not exists!</h1>
						If this error comes to much send the following data to the developers<br>
						Page: {$page}<br>
						Site: {$_SERVER['HTTP_HOST']}<br>
						Err.: 0x00001";
			}
	}

	public function loadStyle($some, $page)
	{
		global $config, $cfg, $conf;
		$file = './themes/' . $some . '/theme.php';
		if ( file_exists ( $file ) ) 
		{
			ob_start();
			include $file;
			$ob = ob_get_contents();
			ob_end_clean();
			$file = $ob;

			$file = preg_replace("#\[url\]#", $conf['site']['url'], $file);

		    $this->parseFile($file, $page);
		}
		else
		{
			$this->parseFile('!Template '.$some.' Does not exists!', $page);
		}
	}

	public function parseFile($fileContents, $page)
	{
		$this->returning = $fileContents . $page; //layout will not be handled yet, sorry.
	}

	public function getConfig($some)
	{
		global $cfg;
		return $cfg->getValue('site','theme');
	}

	public function isMobile()
	{
		$useragent=strtolower($_SERVER['HTTP_USER_AGENT']);
		if(preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|meego.+mobile|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function finish($footer)
	{	
		echo $this->returning . (($footer && function_exists('_themeFooter')) ? _themeFooter() : null) ;
	}
}

?>