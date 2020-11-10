<?php
session_start();

if (isset($_SESSION["login"])) {
    header("location: index.php");
    exit;
}


if (isset($_POST["submit"])) {
    function authAccount()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=myapp', 'root', '');
        $query = $pdo->prepare('SELECT * FROM  admin WHERE username = :username and password = SHA2(:password,0)');
        $query->bindValue('username', $_POST['username']);
        $query->bindValue('password', $_POST['password']);
        $query->execute();

        return $query->rowCount() > 0;
    }
    if (authAccount($_POST['username'], $_POST['password'])) {
        session_start();
        $_SESSION['login'] = $_POST['username'];
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS MINGGUAN 3</title>
    <!--link css -->
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style>
        body {

            background-image: linear-gradient(tomato, teal, red);
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
            padding: 10px;
        }

        .reset {
            background-color: crimson;
            padding: 10px;
        }

        input {
            margin-top: 10px;

        }
    </style>
</head>


<body>
    <div class="container">
        <form action="login.php" method="POST">
            <table>
                <tr>
                    <th colspan="4" class="subjudul">LOGIN</th>
                </tr>
                <tr>
                    <td><input type="text" name="username" id="username" placeholder="username"></td>
                    <td rowspan="2" colspan="3"><?php
                                                ?></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="password" id="password" placeholder="*********"></td>
                </tr>
                <tr>
                    <td colspan="4"> <button type="submit" value="submit" class="submit">submit</button> <button type="reset" value="reset" class="reset">reset</button>&emsp;or &emsp;<a href="index.php" style="padding: 10px; background-color: teal; color: whitesmoke; text-decoration: none;">back</a></td>
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