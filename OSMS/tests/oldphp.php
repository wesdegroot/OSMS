<?php
 function printme()
 {
     return "this is my first php script";
 }

 echo "Hello World!&nbsp;" .
      printme() .
      "&nbsp;" .
      date("d-m-Y H:i:s");
      
?>