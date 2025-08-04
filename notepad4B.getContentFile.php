<?php

     $thisFile=$_POST["php_thisFile"];
     $handle = fopen($thisFile, "r");
     print fread($handle,filesize($thisFile));
     fclose($handle);


?>