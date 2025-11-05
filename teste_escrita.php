<?php
$temp = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'teste.pdf';

if (file_put_contents($temp, "teste")) {
    echo "PHP conseguiu escrever no diretório temporário: $temp";
    unlink($temp); // apaga o arquivo depois
} else {
    echo "PHP NÃO conseguiu escrever no diretório temporário!";
}
?>
