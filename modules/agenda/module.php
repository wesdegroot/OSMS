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

$module[] = array(
					'agenda',
					'this is the agenda',
					array(null, null) //system functions are always null
				 );

function agendaGet($date, $who=null)
{
	if ($who == null)
	{
		// Get All Items for that day
	}
	else
	{
		// Get Items from $who
	}
}

function agendaWrite($date, $who, $extra)
{
	// Write to the agenda
}

function agendaWhoIsFree($date)
{
	// who is free
}

function agendaWhoIsFreeAndNearby($date, $extra)
{
	// Who is free and nearby
}

function agendaWriteWeek($who, $extra)
{
	// agenda write "weekstaat", by $who and $extra is an array mo,di,wo,do,vr,za,zo (free, sick, working, working on)
}

function agendaGetWeeks($weeknumber)
{
	// get all the info ;)
}
?>