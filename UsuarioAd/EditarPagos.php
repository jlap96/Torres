<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="estilosAd.css">
    <title>Editar</title>
</head>
<body>
        <!-- MENU PRINCIPAL -->

    <div class="menu-principal">
        <div class="barra-menu">
            <nav class="enlaces">
                <ul>
                    <li><a href="Inicio.php">Inicio</a></li>
                    <li><a href="VerPagos.html">Consultar pagos</a></li>
                    <li><a href="">Registrar pagos</a></li>
                    <li><a href="../php//CerrarSesion.php">Salir</a></li>
                </ul>
           </nav>
        </div>
    </div>

        <!-- FORMULARIO PARA EDITAR PAGOS -->

        <div class="formActualizar">
            <form action="" method="post" id="form" class="form">
                <h1 class="title">Editar pago</h1>
            
                <div class="inputContainer">
                    <input type="text" name="Concepto" id="Concepto" class="input" placeholder="">
                    <label class="label">Concepto</label>
                </div>
            
                <div class="inputContainer">
                    <input type="text" name="Monto" id="Monto" class="input" placeholder="">
                    <label class="label">Monto</label>
                </div>

                <div>
                <input type="submit" name="insertar" class="submitBtn" value="Guardar">
                </div>  
            </form>
        </div>
</body>
</html>