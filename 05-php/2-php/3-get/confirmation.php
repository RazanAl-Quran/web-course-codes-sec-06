<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // echo "<h1>$_GET['name']</h1>";
    print_r($_GET);
    echo "<h2>" . $_GET['username'] . " and Your id is" . $_GET['id'] . "</h2>";
    ?>
</body>

</html>