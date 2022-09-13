<?php

// $today = $_GET["date"];

$today = new DateTime();

echo date("Y");
echo date("m");
echo date("d");

$chDay = date("Y") . "-12-25";

if (date("m") == 12 && date("d") > 25) {
    $chDay = (date("Y") + 1) . "-12-25";
}

$chDay = new DateTime($chDay);
$interval = $today->diff($chDay);
echo $interval->days . ' days until next Christmas!';
