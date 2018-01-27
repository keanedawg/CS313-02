<?php
    // Start the session
    session_start();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header("Refresh: 5");
    include('header.php');
?>
<h1>Useless Junk</h1>
<h6>You have <?php echo count($_SESSION['myproducts']); ?> item(s) in your cart</h6>
<a href="cart.php">See Cart</a>
<a href="checkout.php">Checkout</a>


<div class="product">
<h2>Rag</h2>
<h3>$1.50</h3>
<form action="addToCart.php" method="get">
<input type="hidden" name="product" value="Rag"></input>
<input type="submit" value="add to cart"></input>
</form>
</div>

<div class="product">
<h2>Log</h2>
<h3>$4.50</h3>
<form action="addToCart.php" method="get">
<input type="hidden" name="product" value="Log"></input>
<input type="submit" value="add to cart"></input>
</form>
</div>

<div class="product">
<h2>Twig</h2>
<h3>$0.50</h3>
<form action="addToCart.php" method="get">
<input type="hidden" name="product" value="Twig"></input>
<input type="submit" value="add to cart"></input>
</form>
</div>

<?php
   include('footer.php')
?>