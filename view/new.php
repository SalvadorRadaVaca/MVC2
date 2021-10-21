<?php
require_once("layouts/header.php");
?>
<h1 class="text-center">NEW</h1>
<form action="" method="get">
    <input type="text" placeholder="INTRODUCE NAME:" name="name"/> <br/>
    <input type="text" placeholder="INTRODUCE PRICE:" name="price"/> <br/>
    <input type="submit" class="btn" name="btn" value="SAVE"/> <br/>
    <input type="hidden" name="m" value="save"/>
</form>

<?php
require_once("layouts/footer.php");