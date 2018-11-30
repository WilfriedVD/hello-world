<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once 'secured/_variables.php';

?>


<html>



   <head>
      <title>Hello World</title>
   </head>

   <body>

     <!-- een punt wordt gebruikt om een bewerking te maken.
     Bij een komma worden de twee strings gewoon tegen elkaar gezet.
      -->


      <?php echo $hello , ' Wilfried'; ?> <br/>
      <?php print ($hello . ' ' . $voornaam . ' ' . $naam); ?>



      <address>
        Copyright &copy; <?php echo date('Y'); ?> Winbooks
      </address>
   </body>

</html>
