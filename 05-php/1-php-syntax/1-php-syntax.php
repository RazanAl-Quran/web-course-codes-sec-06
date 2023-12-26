<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello from my first PHP</h1>
    <?php
    echo "hello from my first echo";
    echo "<p>hello from paraghraph</p>";

    # this is comment
    //  this is comment
    /*this is a Multi
    line comment
    */

    // In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
    echo "Hello World!<br>";
    // ECHO "Hello World!<br>";
    // EcHo "Hello World!<br>";
    

    $username = "Razan";
    echo $username;
    // echo $userName;
    echo "<br>";


    $myText = "Website course";
    echo "I like $myText<br>";
    echo "My fav course is " . $myText . "<br>";


    // PHP Concatination & String Concatenation
    $x = "Hello";
    $y = "World";
    $z = $x . $y;
    // $z = $x . " " . $y;
    // $z = "$x $y";
    echo $z;
    echo "<br>";

    $txt1 = "Learn PHP";
    echo "<h2>" . $txt1 . "</h2>";
    echo "<h2> $txt1 </h2>";
    echo "<br>";

    $count = 5;
    var_dump($count);
    echo "number is $count";
    echo "<br>";
    // echo 'number is $count';
    // echo "<br>";
    
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    echo "<br>";

    $user = "John";
    echo "Hello $user";
    echo "<br>";
    echo 'Hello $user';
    echo "<br>";

    echo strlen("Hello world!");
    echo "<br>";

    const MYCAR = "Volvo";
    echo MYCAR;
    echo "<br>";
    define("GREETING", "Welcome to HTU!");
    echo GREETING;
    echo "<br>";

    // Ternary IF
    echo "<br>";
    $a = 13;
    $b = ($a < 10) ? "Hello" : "Good Bye";
    // if($a<10) {
    //     $b="Hello";
    // } else {
    //     $b="Good bye";
    // }
    echo $b;
    echo "<br>";


    // Arrays
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    echo "<br>";

    // Loop
    // $size = count($cars);
    for ($i = 0; $i < count($cars); $i++) {
        echo $cars[$i] . "<br>";
    }

    // Associative Arrays
    $students = array("Ahmad" => "Computer Science", "Khaled" => "Data Science", "Ibrahim" => "Cyber Security");
    echo $students["Ahmad"];
    echo $students["Khaled"];
    echo "<br>";
    foreach ($students as $name => $major) {
        echo "Key=" . $name . ", Value=" . $major;
        echo "<br>";
    }
    print_r($students);



    ?>


</body>

</html>