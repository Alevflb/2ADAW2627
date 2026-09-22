<?php

    //FORMAS DE HACER UNA ESTRUCTURA DE CONTROL IF

    $a = 1;

    //primera forma
    if($a > 0){
        echo "<p>El número es positivo</p>";
    }

    //segunda forma
    if($a > 0) echo "<p>El número es positivo</p>";

    //tercera forma
    if($a > 0):
        echo "<p>El número es positivo</p>";
    endif;


    //FORMAS DE HACER UNA ESTRUCTURA DE CONTROL IF ELSE

    //primera forma
    if($a > 0){
        echo "<p>El número es positivo</p>";
    }else{
        echo "<p>El número es cero o negativo</p>";
    }

    //segunda forma
    if($a > 0) echo "<p>El número es positivo</p>";
    else echo "<p>El número es cero o negativo</p>";

    //tercera forma
    if($a > 0):
        echo "<p>El número es positivo</p>";
    else:
        echo "<p>El número es cero o negativo</p>";
    endif;

    //FORMAS DE HACER UN IF ELSEIF

    //primera forma
    if($a>0){
        echo "<p>El número es positivo</p>";
    }elseif($a===0){
        echo "<p>El número es cero</p>";
    }else{
        echo "<p>El número es negativo</p>";
    }

    //segunda forma
    if($a>0) echo "<p>El número es positivo</p>";
    elseif($a===0) echo "<p>El número es cero</p>";
    else echo "<p>El número es negativo</p>";

    //tercera forma

    // if():
    //     ;
    // elseif():
    //     ;
    // else:
    //     ;
    // endif;