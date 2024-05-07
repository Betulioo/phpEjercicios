<?php


$colores = ['blanco', 'verde', 'rojo'];

//for ($i = 0; $i < count($colores); $i++) {
//    if ($i!==count($colores)-1) {
//        echo $colores[$i] . ', ';
//    } else {
//        echo $colores[$i];
//    }
//}
echo '<br>';
echo implode(', ', $colores);

echo '<ul>';

sort($colores);

for ($i = 0; $i < count($colores); $i++) {
    echo '<li>'. $colores[$i]. '</li>';
}

//foreach ($colores as $color) {
//    echo '<li>'. $color. '</li>';
//}


