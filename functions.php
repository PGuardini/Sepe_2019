<?php
    $respostas = $_POST;
    $json = json_decode(file_get_contents("dados.json"),true);
    $json[] = $respostas;
    $dadosJson = json_encode($json,JSON_PRETTY_PRINT);
    file_put_contents("dados.json",$dadosJson);