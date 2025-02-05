<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> First PHP Site </title>
</head>

<body>
    <p id="p1"> Test </p>

    <?php
    echo "Hello from the PHP Interpreter!";
    echo "<br>";

    $number = 5; //num
    $decNumber = 2.5; //decimal numbrer
    $str = "Test"; //string
    $flag = TRUE; //boolean

    echo $number . "<br>" . $decNumber . "<br>" . $str . "<br>" . $flag;
    ?>

</body>

</html>