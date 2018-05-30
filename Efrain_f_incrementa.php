<html>
  <head>
    <title>Ejemplo de incremento con for</title>
  </head>
  <body>
    <!--Paso de parametros por referencia-->
    <?PHP
        function incrementa (&$a)
        {
          $a = $a + 1;
        }
        $a = 1;
        incrementa($a);
        print $a; 
    ?>
  </body>
</html>