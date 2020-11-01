
<?php
include("./templates/header.php");
    ?>
    <body>
    <?php
    $nro = isset($_POST["nro"]) ? $_POST["nro"] : "";
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";
    if($_FILES["imagen"]["error"] > 0){
        $imagen = "";
    }else{
        $destino = "./Imagenes/" . $_FILES["imagen"]["name"];
        $imagen = $_FILES["imagen"]["name"];
    }
    $usuarios = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
    $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "";
    include ("conexion.php");
    global $conexion;
    if($nro != "" && $nombre != "" && $tipo != "" && $imagen != "" && $usuarios != "" && $descripcion != ""){
        $insertar = "INSERT INTO jutsu(nro, nombre, descripcion, usuario, img_url, tipo)
                    VALUES ('$nro', '$nombre', '$descripcion', '$usuarios', '$destino', '$tipo')";
        if($_FILES["imagen"]["error"] > 0){
            echo "archivo subido erroneamente";
        }else{
            $destino = "./Recursos/Imagenes/" . $_FILES["imagen"]["name"];
            move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino);
        }
        $resultado = mysqli_query($conexion, $insertar);
        if($resultado){
            header("Status: 301 Moved Permanently");
            header("Location: index.php?");
            exit;
        }else{ echo "no pude agregar tu jutsu";}
    }else die("ocurrio un error inesperado :/");

    ?>
