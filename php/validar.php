<?php

    $frase1 = $_POST['frase1'];
    $frase2 = $_POST['frase2'];
    $frase3 = $_POST['frase3'];
    $frase4 = $_POST['frase4'];
    $frase5 = $_POST['frase5'];
    $contador = 0;

    $frases = array($frase1, $frase2, $frase3, $frase4, $frase5);

    foreach($frases as $frase){
        if($frase != null){
            $contador++;
            $fraseLimpia = LimpiarFraseValidacion($frase);
            $es_palindromo = strrev($fraseLimpia) == $fraseLimpia ? true : false;
            ImprimirHTML($frase, $es_palindromo, $contador);
        }
    }

    function LimpiarFraseValidacion($frase){
        $find = array('á','é','í','ó','ú','â','ê','î','ô','û','ã','õ','ç','ñ',' ','-');
        $repl = array('a','e','i','o','u','a','e','i','o','u','a','o','c','n', '','');
        $frase = trim($frase);
        $frase1 = strtolower($frase);
        $frase2 = str_replace($find, $repl, $frase1);
		// $es_palindromo = strrev($frase2) == $frase2 ? true : false;
        return $frase2;
    }

    function ImprimirHTML($frase, $es_palindromo, $contador){
        echo "<tr>";
        echo "<td>" . $contador ."</td>";
		echo "<td>" . $frase . "</td>";
		echo "<td>";
        if ($es_palindromo) {
            echo "<span class='palindromo'>Sí</span>";
        } else {
            echo "<span class='no-palindromo'>No</span>";
        }
        echo "</td>";
        echo "</tr>";
    }

?>