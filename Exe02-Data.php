<?php
    if(empty($_GET['data'])) {
        echo "Digite a data através da URL para continuar. (Ex:dia/mes/ano)";
        exit;
    }

    $_GET['data'] = str_replace("/", "-", $_GET['data']);
    $_GET['data'] = date('Y-m-d', strtotime($_GET['data']));

    $dataAtual = date("Y-m-d");

    $diferenca = strtotime($_GET['data']) - strtotime($dataAtual);

    $dias = abs(floor($diferenca / (60 * 60 * 24)));

    echo "A quantidade de dias entre ".date("d/m/Y", strtotime($_GET['data']))." e ".date("d/m/Y", strtotime($dataAtual))." é de <strong>".$dias." dias</strong>.";