<?php  

$array = [];

function preencheArray(&$array) {
    for ($i = 0; $i < 100; $i++) {
        $array[] = generateHexColor(); 
    }
}

preencheArray($array);

/**
 * Gera uma cor hexadecimal aleatória.
 * @return string: String contendo a cor no formato hexadecimal. Ex.: #20b2aa
 */
function generateHexColor() {
    $redChannel = str_pad(dechex(rand(0, 255)), 2, '0', STR_PAD_LEFT);
    $greenChannel = str_pad(dechex(rand(0, 255)), 2, '0', STR_PAD_LEFT);
    $blueChannel = str_pad(dechex(rand(0, 255)), 2, '0', STR_PAD_LEFT);
    return '#' . $redChannel . $greenChannel . $blueChannel;
}

?>