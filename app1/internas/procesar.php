<?php   
    //enlace base de datos
    $conect=new mysqli("127.0.0.1","root","","app1db");
    /*if($conect){
        echo "Se conecto a la db";
    }else{
        echo "Error de conexion";
    }*/
    
    //************************* */
    //extraccion de valores del formulario
    extract($_POST);

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
    $roll=$_POST['roll'];

    $sql ="insert into usuarios values ('','$nombres','$apellidos','$correo','$roll')";
    $resSql=mysqli_query($conect,$sql);

    
?>