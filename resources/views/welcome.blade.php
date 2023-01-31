<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .nav-menu {
            display: flex;
            justify-content: space-between;
            width: 50%;
        }

        .nav-links {
            display: none;
        }

        .more {
            display: none;
        }

        .icon {
            font-size: 20px;
            cursor: pointer;
        }

        .search-container {
            display: flex;
        }

        .search-container input {
            padding: 10px;
            border: none;
            font-size: 16px;
            margin-right: 10px;
        }

        .search-container button {
            padding: 10px;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
$CSVfp = fopen("fruits.csv", "r");
if ($CSVfp !== FALSE) {
    ?>
    <div class="phppot-container">
        <table class="striped">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>COLOR</th>
                </tr>
            </thead>
<?php
    while (! feof($CSVfp)) {
        $data = fgetcsv($CSVfp, 1000, ",");
        if (! empty($data)) {
            ?>
            <tr class="data">
                <td><?php echo $data[0]; ?></td>
                <td><div class="property-display"
                        style="background-color: <?php echo $data[2]?>;"><?php echo $data[1]; ?></div></td>
            </tr>
 <?php }?>
<?php
    }
    ?>
        </table>
    </div>
<?php
}
fclose($CSVfp);
?>
</body>

</html>
