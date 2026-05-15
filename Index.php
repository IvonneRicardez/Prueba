<?php
date_default_timezone_set("America/Mexico_City");
$nombre = "Mildred";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #87B2C4;
            margin: 0;
            padding: 40px 0;
        }

        .main-container {
            max-width: 800px;
            width: min(95%, 800px);
            margin: 0 auto;
            padding: 180px;
            text-align: center;
        }

        .reloj {
            font-size: 30px;
            color: #333;
            margin: 0 auto;
            display: inline-block;
        }

        .mensaje {
            font-size: 35px;
        }
    </style>

</head>

<body>

    <div class="main-container">
        <h1>Hola <?= $nombre ?></h1>
        <div class="reloj shadow p-2 mb-5 bg-body-tertiary rounded" id="reloj"></div>

        <div class="mensaje" id="mensaje"></div>
        <a href="segundo.php">
            Ir a Página 2
        </a>
    </div>

    <script>
        function actualizarReloj() {

            const ahora = new Date();

            let horas = ahora.getHours();
            let minutos = ahora.getMinutes();
            let segundos = ahora.getSeconds();

            horas = String(horas).padStart(2, '0');
            minutos = String(minutos).padStart(2, '0');
            segundos = String(segundos).padStart(2, '0');

            document.getElementById("reloj").innerHTML =
                horas + ":" + minutos + ":" + segundos;

            let saludo = "";

            if (horas < 12) {
                saludo = "☀️ Buenos días";
            } else if (horas < 19) {
                saludo = "🌤️ Buenas tardes";
            } else {
                saludo = "🌙 Buenas noches";
            }

            document.getElementById("mensaje").innerHTML = saludo;
        }

        setInterval(actualizarReloj, 1000);

        actualizarReloj();
    </script>


</body>

</html>