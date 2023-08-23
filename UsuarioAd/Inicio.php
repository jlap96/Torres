<?php
session_start();
echo $_SESSION["TipoUsuario"]."tetas";
if ($_SESSION["TipoUsuario"] !== "AD") {
        header('Location: ../Home/InicioSesion.html');
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="stylesheet" href="estilosAd.css">
    <title>Inicio</title>
</head>
<body>
    <!-- MENU PRINCIPAL -->

    <div class="menu-principal">
        <div class="barra-menu">
            <nav class="enlaces">
                <ul>
                    <li><a href="Inicio.html">Inicio</a></li>
                    <li><a href="">Consultar pagos</a></li>
                    <li><a href="">Registrar pagos</a></li>
                    <li><a href="../Home/Index.html">Salir</a></li>
                </ul>
           </nav>
        </div>
    </div>

    <h5>Bienvenido</h5>
    <div class="imgInicio">
        <img src="../img/adminInicio.avif">
    </div>
    
</body>
</html>