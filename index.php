<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">

    <title>ColorLib</title>
</head>
<body>
    <?php 
        include 'ColorLib.php';

        foreach ($array as $color) {
            echo '<div class="color-box" style="background-color: ' . htmlspecialchars($color) . ';"></div>';
        }
    ?>
    <script src='ColorLib.php'></script>
</body>
</html>