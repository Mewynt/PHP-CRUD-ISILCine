<?php
    include_once './controladores/funciones.php';
    $errores = [];

    if($_POST) {
        $currencySelected = $_POST['currency'];
        $errores = buscarErrores($currencySelected, $_POST);

        if (count($errores) == 0) {
            session_start();
            $_SESSION['formulario'] = $_POST;

            header('location:calculate.php');
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Préstamos Hipotecarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Simulador de Préstamos Hipotecarios</h1>

        <div class="col-8 m-auto text-center">
            <?php if (count($errores) > 0) : ?>
            <ul class="alert alert-danger">
                    <?php foreach ($errores as $key => $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>

        <!-- Form Start -->
        <form action="" method="POST" enctype="multipart/form-data">
            <!-- Currency Selector -->
            <div class="mb-4">
                <label class="form-label">Elige la moneda:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="currency" id="currencySoles" value="Soles" checked>
                    <label class="form-check-label" for="currencySoles">Soles</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="currency" id="currencyDollars" value="Dolares">
                    <label class="form-check-label" for="currencyDollars">Dólares</label>
                </div>
            </div>

            <!-- Input Fields -->
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="propertyValue" class="form-label">¿Cuál es el valor de su bien?</label>
                    <input type="number" class="form-control" id="propertyValue" name="propertyValue" placeholder="Min. S/ 33,335 - Máx. S/ 111,110,999,999">
                </div>

                <div class="col-md-6">
                    <label for="initialQuota" class="form-label">¿Cuánto es su cuota inicial?</label>
                    <input type="number" class="form-control" id="initialQuota" name="initialQuota" placeholder="">
                </div>

                <div class="col-md-6">
                    <label for="loanDuration" class="form-label">¿Por cuánto tiempo? (Meses)</label>
                    <input type="number" class="form-control" id="loanDuration" name="loanDuration" placeholder="Min. 6 meses - Máx. 360 meses">
                </div>

                <div class="col-md-6">
                    <label for="interestRate" class="form-label">¿A qué tasa (%)?</label>
                    <input type="number" class="form-control" id="interestRate" name="interestRate" placeholder="Min. 4% - Máx. 19%">
                </div>

                <div class="col-md-6">
                    <label for="requestDate" class="form-label">Fecha de solicitud</label>
                    <input type="date" class="form-control" id="requestDate" name="requestDate">
                </div>

                <div class="col-md-6">
                    <label for="paymentDay" class="form-label">Día del mes para el pago de cuotas</label>
                    <input type="date" class="form-control" id="paymentDay" name="paymentDay">
                </div>
            </div>

            <!-- Continue Button -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary" >Continuar</button>
            </div>
        </form>
        <!-- Form End -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
