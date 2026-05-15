<?php
date_default_timezone_set("America/Mexico_City");
$nombre = "Mildred";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Index</title>

    <style>
        body{
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
            background-color: #f2f2f2;
        }

        .reloj{
            font-size: 50px;
            color: #333;
        }

        .mensaje{
            font-size: 35px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Hola <?= $nombre ?></h1>

    <div class="reloj" id="reloj"></div>

    <div class="mensaje" id="mensaje"></div>

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

 <a href="segundo.php">
        Ir a Página 2
    </a>
</body>
</html>