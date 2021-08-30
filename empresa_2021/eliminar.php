<?php
        include("datos_conexion.php");
        $id = $_GET['id'];
        $db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
        $sql="DELETE from  empleados WHERE id_empleado=".$id.";";
        if($db_conexion->query($sql)===true){
            $db_conexion ->close();
            echo"Exito";
            echo '<script language="javascript">alert("Empleado Eliminado con Exito");</script>';
            print "<script>window.setTimeout(function() { window.location = '/empresa_2021/index.php' }, 1);</script>";
        }else{
            echo"Error" . $sql . "<br>".$db_conexion ->close();

        }            

  ?> 