<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Maximum Value</title>
</head>
<body>
    <h1>Find Maximum Value in Array</h1>
    <?php
    $numbers = [5, 10, -3, 20, -1];
    $maxValue = $numbers[0];
    $i = 1;

    do {
        if ($numbers[$i] > $maxValue) {
            $maxValue = $numbers[$i];
        }
        $i++;
    } while ($i < count($numbers));

    echo "The maximum value in the array is: " . $maxValue;
    ?>
</body>
</html>
