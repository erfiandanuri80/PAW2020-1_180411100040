<?php
session_start();
//koneksi
$db = new PDO('mysql:host=localhost;dbname=myapp', 'root', '');
$username = $_POST['username']; // Ambil value username yang dikirim dari form
$password = $_POST['password']; // Ambil value password yang dikirim dari form


$statement = $db->prepare("SELECT * FROM  admin WHERE username = :username and password = SHA2(:password,0)");
$statement->bindParam(':username', $username);
$statement->bindParam(':password', $password);
$statement->execute();

$data = $statement->fetch();

if (!empty($data)) {
    $_SESSION['username'] = $data['username'];
    //setcookie("message", "delete", time() - 1);
    header("location: index.php");
} else {
    //setcookie("message", "Maaf, Username atau Password salah", time() + 3600);
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS MINGGUAN 4</title>
    <!--link css -->
    <style>
        body {

            background-image: linear-gradient(teal, cyan);
        }

        .container {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 18px;
            padding: 20px 20px;
            margin: 30px;
        }

        .footer .container {
            margin-top: 100px;
            font-size: 20px;
            background-color: #279182;
        }

        img {
            border: 5px solid black;
            width: 150px;
            height: 200px;
        }

        table {
            margin-top: 100px;
            background-color: whitesmoke;
            margin: auto;
            border: 3px solid black;
            padding: 20px;
        }

        .subjudul {
            color: white;
            font-size: 18px;
            background-color: black;
            width: 200px;
            text-align: left;
            border-top: solid;
            border-color: teal;
            border-width: 8px;
        }

        .submit {
            background-color: cornflowerblue;
            padding: 5px 10px;
        }

        .reset {
            background-color: crimson;
            padding: 5px 10px;
        }

        input {
            margin-top: 10px;

        }

        table td {
            text-align: center;
        }
    </style>
</head>


<body>
    <div class="container" style="margin: 200px 0px;">
        <form action="login.php" method="POST">
            <table>
                <tr>
                    <th colspan="4" class="subjudul">LOGIN</th>
                </tr>
                <tr>
                    <td><input type="text" name="username" id="username" placeholder="username"></td>
                    <td rowspan="2" colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="password" id="password" placeholder="*********"></td>
                </tr>
                <tr>
                    <td colspan="4" style="padding: 10px 0;"> <button type="submit" value="login" class="submit">submit</button> <button type="reset" value="reset" class="reset">reset</button></td>
                </tr>
                <tr>
                    <td colspan="4" style="padding: 10px 0;"><a href="index.php" style="padding: 0 100px; background-color: teal; color: whitesmoke; text-decoration: none;">back</a></td>
                </tr>

            </table>
        </form>
    </div>

    <div class="footer">
        <div class="container">
            @ 180411100040 - RIO ERFIAN
        </div>
    </div>


</body>

</html>

<?php  ?>