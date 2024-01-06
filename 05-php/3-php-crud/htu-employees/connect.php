<?php
$con = new mysqli("localhost","root","","employees3");

if($con) {
    echo "success connection";
} else {
    die(mysqli_error($con));
}
?>