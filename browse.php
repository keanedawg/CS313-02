<meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
<meta http-equiv="pragma" content="no-cache" />
<?php
// Start the session
session_start();
header("Refresh:5");
include('header.php')
?>
<h1>Useless Junk</h1>
<a href="cart.php">See Cart</a>


<div class="product">
<h2>Rag</h2>
<h3>$1.50</h3>
<form action="addToCart.php">
add to cart
</form>
</div>

<div class="product">
<h2>Log</h2>
<h3>$4.50</h3>
<button>add to cart</button>
</div>

<div class="product">
<h2>Burned Out Lightbulb</h2>
<h3>$0.50</h3>
<button>add to cart</button>
</div>

<?php
   include('footer.php')
?>