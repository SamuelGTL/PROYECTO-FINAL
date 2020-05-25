<$php
function conecta()
{
function Correr()
      {
 $servidor="localhost";
    $usuario="root";
    $clave="sdgdsg";
    $BaseDeDatos="Formulario";
      $enlace=mysqli_connect($servidor,$usuario,$clave,$BaseDeDatos);
      if(!enlace)
      {
      echo"Error en la conexion con el servidor";
      }
      }
      
      
}