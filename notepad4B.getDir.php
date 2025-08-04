<?php 

      $dir=$_POST["php_baseDirectory"];
      $dir="./";

      $files=scandir($dir);

      

      for($i=0;$i<count($files) ; $i++  ){
         echo $files[$i].','.filemtime($files[$i]).'|';
      }

?>