<?php
include ("conexion.php");
$sql_detalles = $conexion -> query("SELECT * FROM detalles");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id=contenedor></div>
    <?php include("encabezado.php");?>

    <div id="portada">
        <div id="galeria">
        <div id="textoprin">
    </div>
    <div class="limpiar"></div>
    <div id="contenido">
    <ul>
        <?php while($fila=$sql->fetch_array()){

            ?>
           <a href="detalles.php?codigo=<?php echo $fila[0];?>">
         <li>
            <div class="telon"></div>
            <img src="../img/detalles/<?php echo $fila[7];?>" width="270" height="220">
            </a>
            <p><?php echo $fila[1];?></p>
            <p><?php echo $fila[3];?></p>
            <?php } // end while ?>

        EN DETALLES:PHP hay que recoger el id_detalle ($id_detalle=$_GET['id_detalle'];)
        conexion
        query ("SELECT * FROM detalles WHERE id_detalle = $id_detalle");

        <li><a href="index.php">Todos los libros</a></li>
    </ul>
    <br>
    <?php while($fila=$sql_libros->fetch_array()){
        $id_libro=$fila[0];
        $titulo=$fila[1];
        $autor=$fila[2];
        ?>
        <p><?php echo $id_libro." - " .$titulo." - ".$autor;?></p>
    <?php } // end while ?>
</body>
</html>