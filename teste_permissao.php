<?php
$arquivo = 'libs/dompdf/autoload.inc.php';

if (file_exists($arquivo)) {
    if (is_readable($arquivo)) {
        echo "O arquivo $arquivo existe e pode ser lido pelo PHP.";
    } else {
        echo "O arquivo $arquivo existe, mas o PHP NÃO tem permissão para lê-lo.";
    }
} else {
    echo "O arquivo $arquivo não existe.";
}
?>
