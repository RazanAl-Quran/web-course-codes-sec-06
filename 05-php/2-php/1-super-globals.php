<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo phpversion();

    $x = 75;
    $y = 25;

    function addition()
    {
        // echo $x;
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo "<br>";
    echo $z;
    ?>
</body>

</html>