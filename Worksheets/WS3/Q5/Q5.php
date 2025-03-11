<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiply Array Elements</title>
</head>
<body>
    <h1>Multiply Array Elements</h1>
    <?php
    function multiplyArray($array, $factor) {
        for ($i = 0; $i < count($array); $i++) {
            $array[$i] *= $factor;
        }
        return $array;
    }

    // Example usage
    $numbers = [1, 2, 3, 4, 5];
    $factor = 3;
    $result = multiplyArray($numbers, $factor);
    echo "The array elements multiplied by $factor are: " . implode(", ", $result);
    ?>
</body>
</html>
