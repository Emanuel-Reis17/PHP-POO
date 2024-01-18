<?php
// Interpreta o documento XML
$xml = simplexml_load_file('paises.xml');

echo 'Nome      : ' . $xml->nome . "\n";
echo 'Idioma    : ' . $xml->idioma . "\n";
echo 'Religião  : ' . $xml->religiao . "\n";
echo 'Moeda     : ' . $xml->moeda . "\n";
echo 'População : ' . $xml->populacao . "\n";