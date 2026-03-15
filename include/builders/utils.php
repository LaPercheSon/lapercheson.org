<?php
function getStrList(string $pre, int $count = 2, string $post = ".jpg"):array {
    $arr = [];
    for ($i=0; $i < $count; $i++) { 
        array_push($arr, $pre . ($i+1) . $post);
    }
    return $arr;
}

function printVHeight(string $height = "10vh") : void {
    echo "<div style='height: $height; width: 100%;'></div>";
}
?>