<?php
include("configuracion.php");
$conexion= new mysqli($servername,$username,$password,$database,$port);

/* if (mysqli_connect_errno()){
    echo "No conectado", mysqli_connect_error();
    exit();
}else{
    echo "Conectado";
} */