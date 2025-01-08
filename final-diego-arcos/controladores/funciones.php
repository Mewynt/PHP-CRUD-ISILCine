<?php

    function buscarErrores($moneda, $datos) {
        $errors = [];

        $valorBien = $_POST['propertyValue'];
        $cuotaInicial = $_POST['initialQuota'];
        $tiempoMeses = $_POST['loanDuration'];
        $tasaPorcentual = $_POST['interestRate'];

        if (empty($valorBien)) {
            $errors['valorVacio'] = 'El campor de valor del bien no puede estar vacio.';
        }
        if (empty($cuotaInicial)) {
            $errors['cuotaVacio'] = 'El campor de la cuota inicial no puede estar vacio.';
        }
        if (empty($tiempoMeses)) {
            $errors['mesesVacio'] = 'El campor de tiempo de meses no puede estar vacio.';
        }
        if (empty($tasaPorcentual)) {
            $errors['tasaVacio'] = 'El campo de tasa porcentual no puede estar vacio.';
        }
        

        if ($moneda == 'Soles') {
            if ($valorBien < 300000 || $valorBien > 110000000) {
                $errors['rango'] = 'El valor del bien en soles es incorrecto.';
            }
        } else {
            if ($valorBien < 90000 || $valorBien > 900000) {
                $errors['rango'] = 'El valor del bien valor en dolares es incorrecto.';
            }
        }

        if ($cuotaInicial < ($valorBien * 0.1) || $cuotaInicial > ($valorBien * 0.7)) {
            $errors['inicial'] = 'El rango de la cuota inicial no es valido.';
        }

        if ($tiempoMeses < 6 || $tiempoMeses > 48) {
            $errors['meses'] = 'El rango de meses no esta disponible.';
        }

        if ($tasaPorcentual < 4 || $tasaPorcentual > 19) {
            $errors['tasa'] = 'La tasa seleccionada no esta disponible.';
        }

        return $errors;
        
    }

    function calcularCuota($montoPrestamo, $tasaInteresAnual, $plazoMeses) {     
        $tasaInteresMensual = $tasaInteresAnual / 12 / 100; 
        $numCuotas = $plazoMeses; 
        $numerador = $montoPrestamo * $tasaInteresMensual * pow((1 + 
        $tasaInteresMensual), $numCuotas); 
        $denominador = pow((1 + $tasaInteresMensual), $numCuotas) - 1; 
        $cuota = $numerador / $denominador; 
        return $cuota; 
    } 

?>