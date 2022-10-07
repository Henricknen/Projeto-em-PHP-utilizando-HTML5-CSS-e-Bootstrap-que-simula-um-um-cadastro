<?php

$compromisso = $_POST['compr'];
$Local = $_POST['local'];
$data = $_POST['dt'];
$hora = $_POST['hr'];

$compromissos = $compromisso. "\r\n" .$Local ."\r\n" .$data. "\r\n" .$hora;
$com = fopen("arquivo.json", "w+");
fwrite($com, $compromissos);
fclose($com);

echo "<h1>Compromisso gravado com Sucesso...</h1>" .$compromissos;

?><br><br>

<!html>
    <a href="https://www.google.com.br/">logout</a>
</!html>

