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

?>
THIS IS THE HOME PAGE
<BR><BR>
<a href='#' onclick="LoadAjaxPage('http://home.wdgss.nl/projecten/OSMS/ajax','http://home.wdgss.nl/projecten/OSMS/');">TEST AJAX</a>
<BR>
si,sa,so,re,ma,fo,so......, YO

Testing "translations"<br>
<table>
<tr>
 <td>Orginal</td><td>Translated</td><td>type</td>
</tr>
<tr>
 <td>hello</td><td>[translate:"hello"]</td><td>inline</td><td><font color="green">Sucess!!!</font></td>
</tr>
<tr>
 <td>page</td><td><script type="text/javascript">document.write('test' + translate('page'));</script></td><td>JavaScript</td><td><font color='red'>Failed</font></td>
</tr>
<tr>
 <td>loading</td><td><?php echo lang('loading'); ?></td><td>PHP</td><td><font color='green'>Sucess!!!</font></td>
</tr>
<tr>
 <td>LOL</td><td></td><td>none.</td><td><font color='red'>Failed</font></td>
</tr>
</table>