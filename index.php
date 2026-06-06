<!DOCTYPE html>
<html>
<head>
    <title>Swahili Food Restaurant</title>
    <link rel="stylesheet" href="food.css">
</head>
<body>

<div class="topbar">
    Swahili Food Restaurant 🍛
</div>

<div class="hero">
    <h1>Welcome to Swahili Food</h1>
    <p>Fresh • Tasty • Traditional</p>
</div>

<div class="section-title">Our Menu</div>

<div class="menu">

    <div class="card">
        <h2>Rice with Chicken</h2>
        <p>8000 TZS</p>

        <form action="order.php" method="POST">
            <input type="hidden" name="food" value="Rice with Chicken">
            <input type="hidden" name="price" value="8000">
            <input type="number" name="qty" placeholder="Qty" required>
            <button type="submit">Order</button>
        </form>
    </div>

    <div class="card">
        <h2>Ugali with Fish</h2>
        <p>7000 TZS</p>

        <form action="food.php" method="POST">
            <input type="hidden" name="food" value="Ugali with Fish">
            <input type="hidden" name="price" value="7000">
            <input type="number" name="qty" required>
            <button type="submit">Order</button>
        </form>
    </div>

    <div class="card">
        <h2>Nyama Choma</h2>
        <p>12000 TZS</p>

        <form action="order.php" method="POST">
            <input type="hidden" name="food" value="Nyama Choma">
            <input type="hidden" name="price" value="12000">
            <input type="number" name="qty" required>
            <button type="submit">Order</button>
        </form>
    </div>

</div>

<div class="contact">
    <p>📞 +255 628 508 677</p>
    <p>📧 cosmasswahilifood@gmail.com</p>
    <p>📸 Instagram: @cosmas_swahili_food</p>
</div>

<div class="footer">
    © 2026 Swahili Food Restaurant
</div>

<script src="food.js"></script>

</body>
</html>