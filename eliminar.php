<?php
    include_once('conexion.php');
     $id=$_GET['id'];
    $consulta="DELETE  FROM productos  where  id='".$id."' ";
    mysqli_query($con,$consulta);
    header("location:datos.php");
    ?>