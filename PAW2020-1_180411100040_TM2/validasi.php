<?php

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

function validasi(array $listInput)
{
    # variabel berisi inputan baik dari metode POST mau pun GET
    $request = $_REQUEST;
    # variabel yang akan berisi kumpulan pesan error
    $errors = [];
    # mengakses variabel $listPesanError yang ada di file `error-messages.php`
    global $listPesanError;

    # perulangan untuk array terluar (berisi nama input)
    foreach ($listInput as $input => $listPeraturan) {
        # perulangan untuk sub array (berisi nama peraturan)
        foreach ($listPeraturan as $peraturan) {
            $namaFungsi = 'lolos' . ucfirst($peraturan);
            $lolos = $namaFungsi(@$request[$input]);

            # jika tidak lolos
            if (!$lolos) {
                if (!is_array(@$errors[$input])) {
                    $errors += [$input => []];
                }

                array_push($errors[$input], $listPesanError[$peraturan]($input));
            }
        }
    }

    return $errors;
}

function lolosRequired($nilai)
{
    return (bool) @$nilai;
}

function lolosEmail($nilai)
{
    return filter_var($nilai, FILTER_VALIDATE_EMAIL);
}

function lolosAlphabet($nilai)
{
    preg_match("/^[a-zA-Z-' ]*$/", $nilai, $output);

    if (count($output)) {
        return $output[0] === $nilai;
    }

    return false;
}
function lolosNumeric($nilai)
{
    return is_numeric($nilai);
}
function lolosAlphanumeric($nilai)
{
    preg_match("/^(?=.*[0-9])(?=.*[A-Z]).{8,20}$/", $nilai, $output);
    if (count($output)) {
        return $output[0] === $nilai;
    }

    return false;
}
function lolosLengthNumber($nilai)
{
    if (strlen($nilai) > 10 and strlen($nilai) < 13) {
        return true;
    }
    return false;
}
function lolosLengthPass($nilai)
{
    if (strlen($nilai) > 7) {
        return true;
    }
    return false;
}

function lolosSimilarity($nilai)
{

    return true;
}


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

include "success.php";
