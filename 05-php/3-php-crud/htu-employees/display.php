<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>Employees panel</h1>
    <p>Welcome to HTU Employees Dashboard Panel</p>
    
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light">Add User</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // get all the employees/users info from users table (from DB)
                // $sql = "select * from users;";
                $sql = "SELECT * FROM users;";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row["id"];
                        $username = $row["username"];
                        $salary = $row["salary"];
                        echo "
                        <tr>
                            <td> $id  </td>
                            <td> $username </td>
                            <td> $salary  </td>
                            <td>
                            <button class='btn btn-primary'><a  class='text-light' href='updateUser.php?id=$id'>Update</a></button>
                            <button class='btn btn-danger'><a class='text-light' href='deleteUser.php?id=$id'>Delete</a></button></td>
                        </tr>
                        ";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>