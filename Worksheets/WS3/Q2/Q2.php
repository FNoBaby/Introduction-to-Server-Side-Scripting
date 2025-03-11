<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Array Elements</title>
</head>
<body>
    <h1>Sum of Array Elements</h1>
    <?php
    function sumArray($arr) {
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $sum += $arr[$i];
        }
        return $sum;
    }

    // Example usage
    $numbers = [10, 20, 30, 40];
    echo "The sum of the array elements is: " . sumArray($numbers);
    ?>
</body>
</html>
