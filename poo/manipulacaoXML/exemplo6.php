<?php
// Interpreta o documento XML
$xml = simplexml_load_file('paises3.xml');

// Iterando sobre elementos repetitivos
foreach($xml->estados->nome as $estado) {
    echo 'Estado: ' . $estado . "\n";
}
