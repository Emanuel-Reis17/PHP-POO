<?php
# inclui classe cachorro
include_once('./classes/Cachorro.class.php');

$toto = new Cachorro('Totó');
$toto->Nascimento = '3 de Março'; // Atribuição inválida
$toto->Nascimento = '10/04/2005'; // Atribuição correta