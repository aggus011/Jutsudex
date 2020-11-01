<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include("./Recursos/templates/bootstrap.php");
    ?>
    <link rel="stylesheet" href="Recursos/css/index.css">
    <link rel="stylesheet" href="Recursos/css/general.css">
</head>
<?php
include("./Recursos/templates/header.php")
?>

<body>
    <main>
        <?php
        $usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : "";
        if ($usuario == ""){
            echo "<p>Inicie sesion con Usuario: agus Contraseña: 1234</p>";
        }
        ?>
        <div class="conteiner">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th> nro </th>
                    <th> Nombre </th>
                    <th> Tipo </th>
                    <th> Imagen </th>
                    <th> </th>
                </tr>
                <?php
                include ("conexion.php");
                global $conexion;
                $usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : "";
                $query = "Select nro, nombre, tipo, img_url FROM jutsu";
                $res = $conexion->query($query);
                $nin = mysqli_fetch_array($conexion->query("Select img From tipo_jutsu where tipo LIKE 'ninjutsu'"));
                $gen = mysqli_fetch_array($conexion->query("Select img From tipo_jutsu where tipo LIKE 'genjutsu'"));
                $tai = mysqli_fetch_array($conexion->query("Select img from tipo_jutsu where tipo LIKE 'taijutsu'"));
                while($row = mysqli_fetch_array($res)){
                    echo "<tr>";

                    echo "<td>" . $row['nro'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>";
                    if($row['tipo'] == 'ninjutsu'){
                        echo "<img src='./Recursos/". $nin['img'] . "' id = 'tipo'>";
                    }else{
                        if ($row['tipo'] == 'taijutsu'){
                        echo "<img src='./Recursos/". $tai['img'] . "' id = 'tipo'>";
                        }
                    else{
                        echo "<img src='./Recursos/". $gen['img'] . "' id = 'tipo'>";
                    }
                    }
                    echo "</td>";
                    echo "<td>" . "<img src='./Recursos/". $row['img_url'] . " ' id = 'ilust'>" . "</td>";

                    if ($usuario != "") {
                        echo "<nav class='icons'><td><a href='./detalle.php?nro=" . $row['nro'] . "'><button type='button' class='btn'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-book' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                            <path fill-rule='evenodd' d='M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z'/>
                            </svg></button></a>
                            <a href='modificar.php?nro=" . $row['nro'] . "'><button type='button' class='btn'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-brush' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                            <path fill-rule='evenodd' d='M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.117 8.117 0 0 1-3.078.132 3.658 3.658 0 0 1-.563-.135 1.382 1.382 0 0 1-.465-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.393-.197.625-.453.867-.826.094-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.2-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.175-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.247-.013-.574.05-.88.479a11.01 11.01 0 0 0-.5.777l-.104.177c-.107.181-.213.362-.32.528-.206.317-.438.61-.76.861a7.127 7.127 0 0 0 2.657-.12c.559-.139.843-.569.993-1.06a3.121 3.121 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.591 1.927-5.566 4.66-7.302 6.792-.442.543-.796 1.243-1.042 1.826a11.507 11.507 0 0 0-.276.721l.575.575zm-4.973 3.04l.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043l.002.001h-.002z'/>
                            </svg></button> </a>
                            <a href='eliminar.php?nro=" . $row['nro'] . "'><button type='button' class='btn'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                            </svg></button></a>
                            </td> </nav>";
                    }else{
                        echo "<td><a href='./detalle.php?nro=" . $row['nro'] . "'><button type='button' class='btn'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-book' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                            <path fill-rule='evenodd' d='M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z'/>
                            </svg></button></a></td>";
                    }

                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        </div>
        <?php
        if($usuario != ""){
            echo "<form action='agregar.php' method='post' class='agregar'>
        <button type='submit' class='btnagregar'>¡Agrega un jutsu! </button>
    </form>";
        }else{
            echo "<p class='pinicio'>Inicie sesion para añadir, modificar o eliminar un jutsu!</p>";
        }
        ?>
    </main>

</body>
<?php
include("./Recursos/templates/footer.php")
?>