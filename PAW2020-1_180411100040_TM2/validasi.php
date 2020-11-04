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
            $namaFungsi = 'valid' . ucfirst($peraturan);
            $valid = $namaFungsi(@$request[$input]);

            # jika tidak valid
            if (!$valid) {
                if (!is_array(@$errors[$input])) {
                    $errors += [$input => []];
                }

                array_push($errors[$input], $listPesanError[$peraturan]($input));
            }
        }
    }

    return $errors;
}

function validRequired($nilai)
{
    return (bool) @$nilai;
}

function validEmail($nilai)
{
    return filter_var($nilai, FILTER_VALIDATE_EMAIL);
}

function validAlphabet($nilai)
{
    if (ctype_alpha($nilai)) {
        return true;
    }

    return false;
}
function validNumeric($nilai)
{
    return is_numeric($nilai);
}
function validAlphanumeric($nilai)
{
    if (ctype_alnum($nilai)) {
        return true;
    }
    return false;
}
function validLengthNumber($nilai)
{
    if (strlen($nilai) > 10 and strlen($nilai) < 13) {
        return true;
    }
    return false;
}
function validLengthPass($nilai)
{
    if (strlen($nilai) > 7) {
        return true;
    }
    return false;
}

function validSimilarity($nilai)
{
    if (($_POST['password'] == $nilai)) {
        return true;
    }
    return false;
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

    header("Location: index.php?{$queryString}");
    die();
}

include "success.php";
