<?php
    include_once './controladores/funciones.php';
    
    session_start();
    $datos = $_SESSION['formulario'];

    $valorBien = $datos['propertyValue'];
    $cuotaInicial = $datos['initialQuota'];
    $tiempoMeses = $datos['loanDuration'];
    $tasaPorcentual = $datos['interestRate'];

    $valorCuota = calcularCuota(($valorBien - $cuotaInicial), ($tasaPorcentual / 12), $tiempoMeses);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tabla de amortizacion</h1>
    </div>

    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mes</th>
                            <th scope="col">Cuota</th>
                            <th scope="col">Saldo Pendiente</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            for($i=0; $i < $tiempoMeses; $i++):?>
                            <tr>
                                <th scope="row"><?= $i + 1 ?></th>
                                <td>S/. <?= number_format($valorCuota, 2) ?></td>
                                <td><?= number_format(max(($valorBien - $cuotaInicial) - $valorCuota * ($i + 1), 0), 2) ?></td>
                            </tr>
                            <?php endfor;
                        ?>
                    </tbody>
                </table>
                <div class="text-center mt-4">
                    <a class="btn btn-outline-danger mt-4 mb-5" href="./index.php">Volver</a>
                </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
