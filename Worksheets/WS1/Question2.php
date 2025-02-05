<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
</head>
<body>
    <?php
        define("TAX_RATE" , 0.8);
        $subtotal = 100;

        echo "The total cost is " . $subtotal * $TAX_RATE;
    ?>
</body>
</html>