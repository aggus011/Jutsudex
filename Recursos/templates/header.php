<?php
$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : "";
?>

<header>
    <nav class="navheader">
    <nav class="navv">
    <a href="./index.php"><img src="../Recursos/Imagenes/logo.png" id="logo"></a>
    <h2 class="display-4">Jutsudex</h2>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light menu">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse form-header" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <?php
                    if($usuario != "") {
                        echo "<nav class='navv'>";
                        echo "<a class='nav-link' href='#' style='color: rgb(227, 100, 20);'>" . $usuario;
                        echo "<a href='logout.php'><button type='button' class='btn btn-light'>Salir</button></a>";
                        echo "</nav>";
                    }else{
                        echo "<a class='nav-link' href='./iniciar.php' style='color: rgb(227, 100, 20);'>Iniciar Sesion <span class='sr-only'>(current)</span></a>";
                    }
                    ?>

            </ul>
            <form class="form-inline my-2 my-lg-0" action="buscar.php" method="get">
                <input class="form-control mr-sm-2" type="Buscar" placeholder="Search" name="busqueda">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    </nav>
</header>