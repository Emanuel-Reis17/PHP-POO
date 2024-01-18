<?php
/* Use spl_autoload_resgister()
* pois __autoload() está depreciado não possui suporte
*/
spl_autoload_register(function ($class) {
    include_once('./classes/' . $class . '.class.php');
});

$bolo = new Produto(500, 'Bolo de Fubá', 4, 4.12);
echo 'Código  : ' . $bolo->Codigo . "\n";
echo 'Nome    : ' . $bolo->Descricao . "\n";
