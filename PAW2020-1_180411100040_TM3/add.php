<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS MINGGUAN 3</title>
    <!--link css -->
    <style>
        .container {
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            font-size: 18px;
            padding: 20px 20px;
            margin: 10px;
        }

        .box {
            padding: 5px;
            margin: 5px;

        }

        table {
            margin: auto;
        }

        .footer .container {
            font-size: 20px;
            background-color: #279182;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="proses.php" method="GET">
            <h2>Animals Detail</h2>
            <div class="box">
                Puppy Name
                <input type="text" name="puppyName">

            </div>


            <div class="box">
                Breed id
                <select name="breedID" id="breedID">

                    <option value="0">--- SELECT BREED ---</option>
                    <option value="1">Doberman</option>
                    <option value="2">Poodle</option>
                    <option value="3">Pit bull</option>
                    <option value="4">Cattle Dog</option>
                    <option value="5">Alsatian</option>
                    <option value="6">Beagle</option>
                    <option value="7">Schnauzer</option>
                    <option value="8">Jack RUssel</option>
                    <option value="9">Red Terrier</option>
                </select>
            </div>
            <div class="box">
                Description
                <input type="text" name="description">
            </div>
            <div class="box">Price
                <input type="text" name="price"></div>

            <div class="box">
                Picture
                <input type="text" name="picture">
            </div>
            <div class="box">
                <input type="submit" name="register" value="Submit" />
                <input type="reset" name="reset" value="Reset" />
            </div>
        </form>


    </div>
    <div class="footer">
        <div class="container">
            @ 180411100040 - RIO ERFIAN
        </div>
    </div>


</body>

</html>