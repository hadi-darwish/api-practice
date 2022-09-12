<?php
$pass = $_POST["password"];
$pattern = "/^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{12,}$/";
$x = "";
if (preg_match($pattern, $pass)) {
    $x = "is strong";
} else {
    $x = "is weak";
}

$pass = hash("sha256", $pass);
$pass .= "zz";

$results = [
    "password" => $pass,
    "strength" => $x
];
echo json_encode($results);
