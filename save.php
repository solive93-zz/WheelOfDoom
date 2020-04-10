<?php
     $conexion= mysqli_connect('localhost', 'root', "", 'base_de_coders');
     $insertar=$_POST['nombre'];
     $add="INSERT INTO coders values('','$insertar', '1')";
     $query=mysqli_query($conexion, $add);
     echo'VCTIMA AÑADIDA |';
     echo "<a href='index.php'> Volver</a>";
?>