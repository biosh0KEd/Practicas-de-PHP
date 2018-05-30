<html>
  <head>
    <title>Ejemplo de incremento con for</title>
  </head>
  <body>
    <?PHP 
      $color = array ('rojo' => 101, 'verde' => 51, 'azul' => 255);
      foreach ($color as $valor)
        print "Valor: $valor<br/>";
      foreach ($color as $clave => $valor)
        print "Clave: $clave; Valor: $valor<br/>";
    ?>
  </body>
</html>