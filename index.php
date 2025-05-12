<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PHP-Info</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #004085;
            padding-top: 20px;
        }

        .phpinfo {
            background-color: #ffffff;
            padding: 20px;
            margin: 20px auto;
            width: 90%;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table tr td, table tr th {
            padding: 8px;
            border: 1px solid #ccc;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Información del entorno PHP</h1>
    <div class="phpinfo">
        <?php
        ob_start();              // Inicia el almacenamiento en búfer de salida
        phpinfo();
        $info = ob_get_clean();  // Captura la salida de phpinfo()
        
        // Inserta nuestra clase al body de phpinfo()
        $info = preg_replace('%<body>(.*?)</body>%is', '<body class="phpinfo">$1</body>', $info);
        echo $info;
        ?>
    </div>
</body>
</html>