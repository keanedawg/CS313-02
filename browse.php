<?php
// Start the session
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Refresh: 1");
include('header.php');
?>
<h1>Useless Junk</h1>
<a href="cart.php">See Cart</a>


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
<input type="hidden" name="product" value="Log"></input>
<input type="submit" value="add to cart"></input>
</div>

<div class="product">
<h2>Twig</h2>
<h3>$0.50</h3>
<input type="hidden" name="product" value="Twig"></input>
<input type="submit" value="add to cart"></input>
</div>

<?php
   include('footer.php')
?>