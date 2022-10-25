

<?php

date_default_timezone_set('America/Bogota');

$CONCEPTO=$_POST['concepto'];
$TIPO=$_POST['tipo'];
$CANTIDAD=$_POST['cantidad'];
$CATEGORIA=$_POST['categoria'];
$SUBCATEGORIA=$_POST['subcategoria'];
$FECHAREGISTRO = date("F j, Y, g:i a");

$conexion=mysqli_connect("localhost","root","","administrador");
$insertar = "INSERT INTO `movimientos`(Concepto,tipo, Cantidad, Categoria, Subcategoria, fecha_ingreso) VALUES ('$CONCEPTO','Gasto','$CANTIDAD','$CATEGORIA','$SUBCATEGORIA','$FECHAREGISTRO')";
//ejecutar consulta
$resultado  = mysqli_query($conexion, $insertar); 





if(!$resultado){
    echo 'Error al registrar';

}else{  
    sleep(1);
    
    header("location: principal1.php");
    
   
    //echo 'Se ha registrado correctamente';
    
}

mysqli_close($conexion);

?>
