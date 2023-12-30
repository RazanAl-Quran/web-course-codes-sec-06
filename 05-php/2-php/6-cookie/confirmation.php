<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $id = $_POST["id"];
    setcookie('username2',$username);
    setcookie('id2',$id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Hello
        <?php echo $_POST['username'] . ' Your id is ' . $_POST['id']; ?>
    </h1>
    <a href="viewCookie.php"> View cookies </a>
</body>

</html>