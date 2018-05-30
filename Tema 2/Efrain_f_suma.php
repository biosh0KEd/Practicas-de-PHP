<html>
  <head>
    <title>Ejemplo de suma con for</title>
  </head>
  <body>
    <?PHP
      function suma ($x, $y)
      {
        $s = $x + $y;
        return $s;
      }

      $a = 1;
      $b = 2;
      $c = suma ($a, $b);
      print $c;
    ?>
  </body>
</html>