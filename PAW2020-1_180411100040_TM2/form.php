<?php
$old = (object) @$_GET['old'];
$errors = (object) @$_GET['errors'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS MINGGUAN 2</title>
    <!--link css -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h2>REGISTRASI FORM</h2>
        <a href="http://localhost/kuliahpaw/TM/PAW2020-1_180411100040_TM2/form.php">reload</a>
        <form action="proses.php" method="GET">
            Surname
            <br>
            <input type="text" name="surname" value="<?php echo @$old->surname ?>">
            <?php
            if (@$errors->surname) : ?>
                <br><span style="color: red"><?php echo $errors->surname[0] ?></span>
            <?php
            endif; ?>
            <br>
            Email address
            <br>
            <input type="text" name="email" value="<?php echo @$old->email ?>">
            <?php
            if (@$errors->email) : ?>
                <br><span style="color: red"><?php echo $errors->email[0] ?></span>
            <?php
            endif; ?>
            <br>
            Mobile Number
            <br>
            <input type="text" name="mobileNumber" value="<?php echo @$old->mobileNumber ?>">
            <?php
            if (@$errors->mobileNumber) : ?>
                <br><span style="color: red"><?php echo $errors->mobileNumber[0] ?>
                </span>
            <?php
            endif; ?>
            <br>
            Password
            <br>
            <input type="text" name="password" value="<?php echo @$old->password ?>">
            <?php
            if (@$errors->password) : ?>
                <br><span style="color: red"><?php echo $errors->password[0] ?>
                </span>
            <?php
            endif; ?>
            <br>
            Confirm Password
            <br>
            <input type="text" name="c_password" value="<?php echo @$old->c_password ?>">
            <?php
            if (@$errors->c_password) : ?>
                <br>
                <span style="color: red"><?php echo $errors->c_password[0] ?>
                </span>
            <?php
            endif; ?>
            <br>

            <button type="submit" class="submit" value="submit">Submit</button>
            <button type="reset" class="reset">Reset</button>
        </form>
    </div>


    <div class="footer">
        <div class="container">
            @ 180411100040 - RIO ERFIAN
        </div>
    </div>

</body>

</html>