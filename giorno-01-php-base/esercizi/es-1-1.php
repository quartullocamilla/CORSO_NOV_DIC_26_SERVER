

<?php

/*
substr()	Prende una parte di una stringa
strtoupper()	Trasforma il testo in maiuscolo
str_pad()	Aggiunge caratteri per raggiungere una lunghezza
sprintf()	Costruisce una stringa usando un formato

Simbolo	Significato
%s	Stringa (testo)
%d	Numero intero
%05d	Numero intero con 5 cifre, completato con zeri 
Ctrl + k +c/u
*/

$cognome = "Calvino";
$genere = "Romanzo";
$anno = 1957;
$numero = 42;
echo strtoupper(substr($cognome, 0, 3))
    . "-"
    . strtoupper(substr($genere, 0, 3))
    . "-"
    . $anno
    . "-"
    . str_pad($numero, 5, "0", STR_PAD_LEFT);

echo "\n";

$cognome = "Calvino";
$genere = "Romanzo";
$anno = 1957;
$numero = 42;

$testo = strtoupper(substr($cognome, 0, 3))
    . "-"
    . strtoupper(substr($genere, 0, 3))
    . "-"
    . $anno;

echo sprintf("%s-%05d", $testo, $numero);

?>
    

