<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username2 = $_POST["username"];
    $salary2 = $_POST["salary"];
    // echo $username;

    $sql = "INSERT INTO users (username,salary) VALUES ('$username2',$salary2);";
    $result = mysqli_query($con, $sql);

    if($result) {
        echo "data inserted successfully";
        header("Location: display.php");
    } else {
        die(mysqli_error($con));
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Employee Name</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary">
            </div>
            <button type="submit" class="btn btn-primary">Add Employee</a></button>
        </form>
    </div>

</body>

</html>