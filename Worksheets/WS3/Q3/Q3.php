<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Numbers</title>
</head>
<body>
    <h1>Even Numbers from 1 to 6</h1>
    <?php
    $numbers = range(1, 6);
    $i = 0;
    echo "Even numbers: <br>";
    while ($i < count($numbers)) {
        if ($numbers[$i] % 2 == 0) {
            echo $numbers[$i] . "<br>";
        }
        $i++;
    }
    ?>
</body>
</html>
