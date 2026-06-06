<?php
$food = $_POST['food'];
$price = $_POST['price'];
$qty = $_POST['qty'];

$total = $price * $qty;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Receipt</title>
</head>
<body style="font-family:Arial;text-align:center;padding:50px;">

<h1>Order Successful ✔</h1>

<p>Food: <?php echo $food; ?></p>
<p>Price: <?php echo $price; ?> TZS</p>
<p>Quantity: <?php echo $qty; ?></p>

<h2>Total: <?php echo $total; ?> TZS</h2>

<a href="index.php">
    <button style="padding:10px;background:green;color:white;border:none;">
        Back Home
    </button>
</a>

</body>
</html>