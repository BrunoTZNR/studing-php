<?php
    //superglobais

    //`$GLOBAL [$variableName]` -> Declara uma variável global podendo usar dentro e fora de funções.
    $a=10;
    $b=20;
    function soma1(){
        $GLOBALS['c1']=$GLOBALS['a']+$GLOBALS['b'];
    }
    function soma2(){
        global $a, $b, $c2;
        $c2=$a+$b;
    }
    soma1();
    soma2();
    echo '<p>'.$c1.' '.$c2.'</p>';

    //`$_SERVER['value']` -> Contém informações sobre headers, paths e scripts locations.

    echo $_SERVER['PHP_SELF']; //o caminho do projeto;
    echo $_SERVER['SERVER_NAME']; //localhost;
    echo $_SERVER['HTTP_HOST']; //localhost;
    echo $_SERVER['REMOTE_ADDR']; //::1;
    echo $_SERVER['HTTP_USER_AGENT']; //informações queme stá acessando o site;
    echo $_SERVER['SCRIPT_NAME']; //nome do projeto.
?>