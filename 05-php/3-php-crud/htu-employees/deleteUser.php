<?php
include "connect.php";

// deleteUser.php?id=$id
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "delete from users where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo ('your user has been deleted');
        header('Location: display.php');

    } else {
        die(mysqli_error($con));
    }

}
?>