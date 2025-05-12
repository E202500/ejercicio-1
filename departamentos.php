<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Departamentos de Guatemala</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #004085;
        }

        .departamento {
            background-color: #ffffff;
            border-left: 6px solid #007bff;
            padding: 15px;
            margin: 20px auto;
            width: 70%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .departamento h2 {
            margin: 0 0 5px;
            color: #0056b3;
        }

        .departamento p {
            margin: 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Listado de Departamentos de Guatemala</h1>

    <?php
    $departamentos = [
        "Guatemala" => "Guatemala",
        "Alta Verapaz" => "Cobán",
        "Baja Verapaz" => "Salamá",
        "Chimaltenango" => "Chimaltenango",
        "Chiquimula" => "Chiquimula",
        "El Progreso" => "Guastatoya",
        "Escuintla" => "Escuintla",
        "Huehuetenango" => "Huehuetenango",
        "Izabal" => "Puerto Barrios",
        "Jalapa" => "Jalapa",
        "Jutiapa" => "Jutiapa",
        "Petén" => "Flores",
        "Quetzaltenango" => "Quetzaltenango",
        "Quiché" => "Santa Cruz del Quiché",
        "Retalhuleu" => "Retalhuleu",
        "Sacatepéquez" => "Antigua Guatemala",
        "San Marcos" => "San Marcos",
        "Santa Rosa" => "Cuilapa",
        "Sololá" => "Sololá",
        "Suchitepéquez" => "Mazatenango",
        "Totonicapán" => "Totonicapán",
        "Zacapa" => "Zacapa"
    ];

    foreach ($departamentos as $departamento => $cabecera) {
        echo "<div class='departamento'>";
        echo "<h2>$departamento</h2>";
        echo "<p><strong>Cabecera:</strong> $cabecera</p>";
        echo "</div>";
    }
    ?>
</body>
</html>