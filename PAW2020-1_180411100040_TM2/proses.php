<?php

require_once 'validasi.php';


$peraturan = [
    'surname' => ['required', 'alphabet'],
    'email' => ['required', 'email'],
    'mobileNumber' => ['required', 'numeric', 'lengthNumber'],
    'password' => ['required', 'lengthPass'],
    'c_password' => ['required', 'similarity']
];


$errors = validasi($peraturan);

if (count($errors) > 0) {
    $old = $_REQUEST;
    $queryString = http_build_query([
        'errors' => $errors,
        'old' => $old
    ]);

    header("Location: form.php?{$queryString}");
    die();
}
//include "success.php";
