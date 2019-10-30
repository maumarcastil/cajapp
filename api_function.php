<?php

//$json= file_get_contents('url');
//$obj= json_encode($json, true);
$peticion= $obj['peticion'];
$correo= $obj['email'];
$pass= $obj['pass'];

if($peticion == ""){
    $peticion= "login";
    $correo= "albertomartinezmovilla@hotmail.com";
    $pass= "mau123";
}


if($peticion == "login"){
   mostrar($correo, $pass);
}

function mostrar($correo, $contrasena){

    require_once "conexion.php";

    $sql= "SELECT* FROM usuarios WHERE correo='$correo'";

    $query=mysqli_query($conexion, $sql);
    if(mysqli_num_rows($query)== 1){
        $resultado=mysqli_fetch_assoc($query);
     //   echo "correo ingresado es: ".$correo."<br>";
       // echo "pass ingresada es: ".$contrasena."<br>";
        //echo "pass recibida es: ".$resultado['contrasena']."<br>";
        if($contrasena==$resultado['contrasena']){
            
            $res["respuesta"]="login exitoso";
            $res["data"]=$resultado;
            echo json_encode($res);
            //echo $res["respuesta"]."<br>";
        }else{
            $res["respuesta"]="incorrecto";
            echo json_encode($res);

        }
   
    
    }else{
        $res["respuesta"]="El correo no existe";
        echo json_encode($res) ;
    }
//    echo json_encode($resultado);
}

//mostrar('kerin.marino@gmail.com','mau123');

?>