<?php

    $turno = $_POST["Turno"];
    $horas_trabajadas = $_POST["Horas"];

    $total = 0;//salario_total
    $base = 0;//salario_base
    $pension = 0;//salario_pension
    $salud = 0;///salario_salud

    define(constant_name: "MAN", value: 20);
    define(constant_name: "TAR", value: 25);
    define(constant_name: "NOC", value: 40);

    switch ($turno) {
        case '1':
            $base = $horas_trabajadas * MAN;
            break;
        case '2':
            $base = $horas_trabajadas * TAR;
            break;
        case '3':
            $base = $horas_trabajadas * NOC;
            break;
    }

    $salud = $base * 0.08;
    $pension= $base * 0.12;
    $total = $base + $salud + $pension;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            background: #ffffff;
        }
        main {
            width: 80%;
            margin: 0 auto;
        }
    </style>
    <main>
    </div>
        <div class="col-md-6">
            <h6 class="text-align:center">Resultados</h6>
        </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6"></div>
    <?php
    echo "El salario total fue:  $total <br>
     la salud fue $salud <br>
      la pesion fue $pension <br>
      y el salario base $base";
    ?>
    </main>
</head>
<body>
    
</body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</html>
