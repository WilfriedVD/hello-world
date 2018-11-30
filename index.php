<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

//include_once 'secured/_variables.php';

$product = 25;


?>


<html>



   <head>
      <title>Hello World</title>
   </head>

   <body>

     <!-- een punt wordt gebruikt om een bewerking te maken.
     Bij een komma worden de twee strings gewoon tegen elkaar gezet.
      -->

<?php
  //echo $hello , ' Wilfried';
  //print ($hello . ' ' . $voornaam . ' ' . $naam);

  $btw_bedrag = 0.21 * $product;
  $btw_bedrag = round($btw_bedrag, 2);
  echo 'De BTW van het product bedraagt: ',$btw_bedrag;


?>




      <address>
        Copyright &copy; <?php echo date('Y'); ?> Winbooks
      </address>
   </body>

</html>
