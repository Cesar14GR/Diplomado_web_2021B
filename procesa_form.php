<?php
$nombre = $_POST["nombre"];
$correo = $_POST["email"];

if (isset($_POST["nombre"])){
    $nombre = $_POST["nombre"];
    if(sizeof($nombre)!=0){
        echo "La variable no esta vacia";
    }else{
        echo "La variable esta vacia";
    }
}else{
    echo "La variable no esta definida";
}

?>