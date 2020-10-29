<?php

require_once 'error-messages.php';

if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    echo "Password= $password";
}

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
    global $password;
    if ($nilai == $password) {
        return true;
    }
    return false;
}
