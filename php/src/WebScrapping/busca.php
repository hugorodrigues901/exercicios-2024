<?php

$html = file_get_contents('file:///C:/Users/hugor/OneDrive/Documentos/GitHub/exercicios-2024/php/assets/origin.html');

libxml_use_internal_errors(true);

$domDocument = new DOMDocument();
$domDocument->loadHTML($html);

$linkTags = $domDocument->getElementsByTagName("a");

$linksDaClasseEspecifica = '';

foreach ($linkTags as $link) {
    if (strpos($link->getAttribute('class'), 'paper-card') !== false) {
        $linksDaClasseEspecifica .= $link->getAttribute('href') . "\n";
    }
}

file_put_contents("LinksDaClasseEspecifica.txt", $linksDaClasseEspecifica);

?>
