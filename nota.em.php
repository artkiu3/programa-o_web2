<?php
    $nota1 = $_GET ["nota1"];
    $nota2 = $_GET ["nota2"];
    

    $media = ($nota1 + $nota2) / 2;
    if  ($media >= 70) {
        print "Aprovado";
    } 
        if ($media < 30) {
            print "Reprovado";
        } 
        

?>