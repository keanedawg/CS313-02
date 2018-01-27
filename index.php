<?php
// Start the session
session_start();
header("Refresh:5");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<html>
<header>
  <link rel="stylesheet" type="text/css" href="snazzy.css">


</header>
<body>
<?php
  echo "hello world";
?>
<h1>Useless Junk</h1>


<div class="product">
<h2>Rag31</h2>
<h3>$1.50</h3>
<button>add to cart</button>
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

</body>

</html>