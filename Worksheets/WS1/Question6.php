<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 6</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 500px; margin: 20px auto; }
        h1 { text-align: center; }
        .details { font-size: 18px; }
        .details b { font-weight: bold; }
    </style>
</head>
<body>
    <?php
        // Define constants
        define("TAX_RATE", 0.08); // 8% tax
        define("DISCOUNT_RATE", 0.10); // 10% discount

        // Product details
        $product_name = "Smartphone";
        $price_per_unit = 699.99;
        $quantity = 2;

        // Calculations
        $subtotal = $price_per_unit * $quantity;
        $discount = $subtotal * DISCOUNT_RATE;
        $total_after_discount = $subtotal - $discount;
        $tax = $total_after_discount * TAX_RATE;
        $total_price = $total_after_discount + $tax;

        // Output everything using echo
        echo "<h1>Product Details</h1>";
        echo "<p><b>Product Name:</b> $product_name</p>";
        echo "<p><b>Price per Unit:</b> €" . number_format($price_per_unit, 2) . "</p>";
        echo "<p><b>Quantity:</b> $quantity</p>";
        echo "<p><b>Subtotal:</b> €" . number_format($subtotal, 2) . "</p>";
        echo "<p><b>Discount (10%):</b> -€" . number_format($discount, 2) . "</p>";
        echo "<p><b>Total After Discount:</b> €" . number_format($total_after_discount, 2) . "</p>";
        echo "<p><b>Tax (8%):</b> +€" . number_format($tax, 2) . "</p>";
        echo "<h2>Total Price: €" . number_format($total_price, 2) . "</h2>";
    ?>
</body>
</html>