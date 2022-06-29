<?php

    $texto = $_POST['texto'];
    $dados = json_decode($texto, true);

    $dados['profissao'] = 'desenvolvedor';

    $json = json_encode($dados);

    echo $json;

?>