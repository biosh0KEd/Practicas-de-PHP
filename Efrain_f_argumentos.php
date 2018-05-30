<html>
  <head>
    <title>Ejemplo de incremento con for</title>
  </head>
  <body>
    <?PHP
      function muestranombre ($titulo = "Sr.")
      {
        print "Estimado $titulo:<br/>";
      }
      muestranombre ();
      muestranombre ("Prof.");
    ?>
  </body>
</html>