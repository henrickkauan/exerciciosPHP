<?php
    $CEP = null;
    $CEP = $_POST['cep'];
    $url = "http://viacep.com.br/ws/$CEP/json/";
    $JSON = file_get_contents($url);
    $json_data = json_decode($JSON, true);
?>