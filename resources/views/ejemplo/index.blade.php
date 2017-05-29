<html>
<body>
Prueva de laravel 2 <br>
<center> {{ $var1 }} <?php echo $var2; ?> </center><br><br>
@for ($i = 0; $i < 10; $i++)
  recorrido {{ $i }} <?php echo $i; ?><br>
  @endfor
  <br><br>

  <?php
  for ($i = 0; $i < 10; $i++){
     echo "recorrido $i <br>";
  }
?>
<br>
<!-- Atraves de las url se pueden enviar varibles hacia el controlador-->
<a href="{{ URL::action('HolaController@hola') }}">Hola</a><br/>
<a href="{{ URL::action('HolaController@adios') }}">Adios</a>>
</body>
</html>