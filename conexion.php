<?php
function retornarConexion() {
  $con=mysqli_connect("190.177.55.159:3306","root","","bd1");
  return $con;
}
?>
