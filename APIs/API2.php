<?php
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

$calculation = pow($a, 3) + ($b * $c) - ($a / $b);

$results = [
    "a" => $a,
    "b" => $b,
    "c" => $c,
    "result" => $calculation
];
echo json_encode($results);
