
<?php

$genere = "Giallo e Thriller";

$scaffale = match ($genere) {
    "Romanzo" => "A",
    "Giallo e Thriller" => "B",
    "Saggio" => "C",
    "Poesia" => "D",
    default => "Chiedi al bancone",
};

echo "Il genere " . $genere . " è nello scaffale " . $scaffale;

?>
