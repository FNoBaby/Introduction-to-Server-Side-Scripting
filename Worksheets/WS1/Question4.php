<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
</head>
<body>
    <?php
        $inStock = false;
        $onSale = false;

        if($inStock){
            echo"The product is in stock but not on sale";
        } else if ($inStock && $inStock){
            echo "The product is in stock and on sale";
        } else {
            echo "The product is not available";
        }

    ?>
</body>
</html>