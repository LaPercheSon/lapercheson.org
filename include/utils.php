<?php
function getStrList(string $pre, int $count = 2, string $post = ".jpg"):array {
    $arr = [];
    for ($i=0; $i < $count; $i++) { 
        array_push($arr, $pre . ($i+1) . $post);
    }
    return $arr;
}
?>