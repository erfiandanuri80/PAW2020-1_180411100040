<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS MINGGUAN 3</title>
    <!--link css -->
    <style>
        .container {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 18px;
            padding: 20px 20px;
            margin: 10px;
        }

        table {
            border: 1px solid black;
            margin: auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }

        .footer .container {
            font-size: 20px;
            background-color: #279182;
        }
    </style>
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <th>Puppy Name</th>
                <th>Breed Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Pictures</th>
            </tr>
            <?php
            $db = new PDO('mysql:host=localhost;dbname=puppies', 'root', '');
            $statement = $db->query("SELECT * FROM animals, breeds WHERE animals.BreedID = breeds.Breed");

            foreach ($statement as $row) {
                echo "<tr>";
                echo "<td>{$row['PuppyName']}</td>";
                echo "<td>{$row['BreedName']}</td>";
                echo "<td>{$row['Description']}</td>";
                echo "<td>{$row['Price']}</td>";
                echo "<td><img src='puppies_images/{$row['Picture']}' alt='{$row['Picture']}'></td>";
                echo "</tr>";
            }

            ?>
            <tr>
                <td colspan="5"><a href="add.php">Add puppies data</a></td>
            </tr>
        </table>



    </div>
    <div class="footer">
        <div class="container">
            @ 180411100040 - RIO ERFIAN
        </div>
    </div>


</body>

</html>