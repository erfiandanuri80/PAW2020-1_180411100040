<?php

if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    echo "Password= $password";
}

$listPesanError = [
    'required' => function ($field) {
        return "Field harus diisi.";
    },
    'email' => function ($field) {
        return "Field harus berupa email yang valid.";
    },
    'numeric' => function ($field) {
        return "Field harus berupa angka numerik.";
    },
    'alphabet' => function ($field) {
        return "Field harus berupa karakter alphabet.";
    },
    'aphanumeric' => function ($field) {
        return "Field harus disertai Uppercase, karakter, dan nomer";
    },
    'lengthNumber' => function ($field) {
        return "Field Harus diisi dengan nomor telepon yang valid";
    },
    'lengthPass' => function ($field) {
        return "Field Harus diisi dengan minimal 8 karakter";
    },
    'similarity' => function ($field) {
        return "Field Inputan tidak cocok ";
    }

];
