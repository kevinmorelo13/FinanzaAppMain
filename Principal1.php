<?php
include_once 'registro.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM movimientos";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>FinanzaApp</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="./css/cssingreso.css">
    
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
  </head>
    
  <body> 
  <nav class="navbar1">
        <div class="logo"><img src="./Imagenes/Diseño_sin_título-removebg-preview.png" alt="logo" width="150px"></div>
        
        <div class="regis"><script src="./redirection.js"></script></div>
    </nav>
    
    <section class="movimiento1">
        <div class="movimiento__titulo1"><h2>Movimiento</h2></div>
        <div class="movimiento__input1">          
               <button type="button" class="movimiento_ingreso1" onclick="redireccioningreso()"> + Ingreso</button >
               <button type="button" class="movimiento_gasto1" onclick="redirecciongasto()"> - Gasto</button>
        </div>
       
    </section>
    
    <!--Ejemplo tabla con DataTables-->
    <div class="container"  style="width:100%">
        <div class="row" >
                <div class="col-lg-12" style="width:100%">
                    <div class="table-responsive" overflow-x: unset; style="width:100%">        
                        <table id="example" class="table_table_hover" cellspacing="0" style="width:98%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipo</th>
                                <th>Concepto</th>                 
                                <th>Cantidad</th>
                                <th>Categoria</th>
                                <th>Subcategoria</th>
                                <th>Fecha de ingreso</th>
                              </tr>
                        </thead>
                        
            
              <tbody>
              <?php
              foreach ($usuarios as $usuarios) {                
              ?>
                  <tr>
                    <td><?php echo $usuarios['ID']?></td>
                    <td><?php echo $usuarios['Tipo']?></td>
                    <td><?php echo $usuarios['Concepto'] ?></td>                 
                    <td><?php echo '$'. $usuarios['Cantidad'] ?></td>
                    <td><?php echo $usuarios['Categoria']?></td>
                    <td><?php echo $usuarios['Subcategoria'] ?></td>
                    <td><?php echo $usuarios['Fecha_ingreso'] ?></td>
                  </tr>
                  <?php 
                   }
                 ?> 
              </tbody>
                  
                       </table>                  
                    </div>
                </div>
        </div>  
    </div>    
     
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>
