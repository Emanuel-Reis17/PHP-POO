<?php

// NÃO EXECUTAR O CÓDIGO ANTES DE COMENTAR AS PARTE DESNECESSÁRIAS !!!
$fd = fopen("./funcoes.php", "r");
while (!feof($fd)) {
    $buffer = fgets($fd, 4096);
    echo $buffer;
}
fclose($fd);

$fd = fopen("./file.txt", "w");
fwrite($fd, "Linha 1 \n");
fwrite($fd, "Linha 2 \n");
fwrite($fd, "Linha 3 \n");
fclose($fd);

echo file_put_contents("./file.txt", "Este \né o novo conteúdo \ndo arquivo");

echo file_get_contents("./funcoes.php");

$arquivo = file("./file.txt");
echo $arquivo[0];
echo $arquivo[1];
echo $arquivo[2];

# "copy" : Copiar arquivos
$origem = "./requisicao.php";
$destino = "./file.txt";

if (copy($origem, $destino)) {
    echo "Cópia efetuada";
} else {
    echo "Cópia não efetuada";
}

# "rename": Altera a nomenclatura do arquivo
if (rename($origem, $destino)) {
    echo "Renomeação efetuada";
} else {
    echo "Renomeação não efetuada";
}

# "unlink" : Apaga um arquivo
$arquivo = "./file.txt";
if (unlink($arquivo)) {
    echo "Arquivo apagado";
} else {
    echo "Arquivo não apagado";
}

# "file" : Verificar se um arquivo existe
if (file_exists($arquivo)) {
    echo "Arquivo existente";
} else {
    echo "Arquivo não existente";
}

# "is_file" : Verifica a localização dada a um arquivo
if (is_file($arquivo)) {
    echo "$arquivo é um arquivo";
} else {
    echo "$arquivo não é um arquivo";
}

# "mkdir" : Cria uma PASTA :C 
$dir = "./teste";
if (mkdir($dir, 0777)) {
    echo "$dir criado com sucesso";
} else {
    echo "$dir não criado";
}

# "getcwd" : Retorna o diretório atual
echo "O diretório atual é " . getcwd();

# "chdir" : Altera o diretório atual
echo "O diretório atual é " . getcwd();
chdir('requisicao.php');
echo "O diretório atual é " . getcwd();

# "rmdir" : Apaga uma PASTA 
if (rmdir($dir)) {
    echo "Diretório apagado";
} else {
    echo "Diretório não apagado";
}
