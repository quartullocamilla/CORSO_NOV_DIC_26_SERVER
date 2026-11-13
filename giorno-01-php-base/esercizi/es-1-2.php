<?php

$annoNascita = 1996;
$residente = true;

$eta = date('Y') - $annoNascita;

if ($eta <= 13) {
    $categoria = "Ragazzi";
    $costo = 0;

} elseif ($eta <= 25) {
    $categoria = "Giovani";
    $costo = 5;

} elseif ($eta <= 64) {
    $categoria = "Adulti";
    $costo = 15;

} else {
    $categoria = "Senior";
    $costo = 8;
}

// Sconto residenti
if ($residente == true) {
    $costo = $costo * 0.80;
}

// Stampa risultato
if ($costo == 0) {
    echo "Età " . $eta . " - tessera " . $categoria . " - costo gratuito";
} else {
    echo "Età " . $eta . " - tessera " . $categoria . " - costo " . number_format($costo, 2, ',', '.') . " €";
}

?>
