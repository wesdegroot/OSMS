<?php
/******************************************************
 * ©2006 copyrights by RE-Desgin (www.re-design.de)   *
 * Author: Enrico Reinsdorf (enrico@.re-design.de)    *
 * Modified: 2006-01-16                               *
 ******************************************************
 * Modify'r name: Wesley De Groot. (www.wdgp.nl)      *
 * Modify: 29-09-2012 ; added autosave; ...           *
 * neat up the code; removed german comment (EN ONlY) *
 ******************************************************
 * © WDGP.nl - 2012    ***   FOR USE WITH OPENSOURCE  *
 ******************************************************/
 
 # OPENSOURCE
 # => CC BY-SA 
 # => => That means you may use, edit, improve the code, as long you share it also; you MUST leave the names of 'WDG.P' & RE-Disign...
 #
 # => Rules: 
 # => http://wdgp.nl/#conditions

class iniParser {
	
	var $_iniFilename = '';
	var $_iniParsedArray = array();
	
	function iniParser( $filename )
	{
		$this->_iniFilename = $filename;

		if($this->_iniParsedArray = parse_ini_file( $filename, true ) )
		{
			return true;
		}
		else 
		{
			return false;
		} 
	}

	function getSection( $key )
	{
		return @$this->_iniParsedArray[$key];
		$this->save();
	}

	function getValue( $section, $key )
	{
		if(!isset($this->_iniParsedArray[$section]))
		 return false;

		return $this->_iniParsedArray[$section][$key];
	}
	
	function get( $section, $key=NULL )
	{
		if(is_null($key))
		 return $this->getSection($section);

		return $this->getValue($section, $key);
	}
	
	function setSection( $section, $array )
	{
		if(!is_array($array))
		 return false;

		return $this->_iniParsedArray[$section] = $array;
	}
	
	function setValue( $section, $key, $value )
	{
		if( $this->_iniParsedArray[$section][$key] = $value )
		{
			$this->save();
			return true;
		}
		else
		{
			$this->save();
		}
	}
	
	function set( $section, $key, $value=NULL )
	{
		if(is_array($key) && is_null($value))
		 return $this->setSection($section, $key);

		return $this->setValue($section, $key, $value);
	}
	
	function save( $filename = null )
	{
		if( $filename == null )
		 $filename = $this->_iniFilename;

		if( is_writeable( $filename ) ) 
		{
			$SFfdescriptor = fopen( $filename, "w" );
			foreach($this->_iniParsedArray as $section => $array)
			{
				fwrite( $SFfdescriptor, "[" . $section . "]\n" );
				foreach( $array as $key => $value )
				{
					fwrite( $SFfdescriptor, "$key = $value\n" );
				}
				fwrite( $SFfdescriptor, "\n" );
			}
			fclose( $SFfdescriptor );
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>