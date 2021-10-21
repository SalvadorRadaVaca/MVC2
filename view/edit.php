<?php
require_once("layouts/header.php");
?>
<h1 class="text-center">EDIT</h1>
<form action="" method="get">
    <?php
    foreach($data as $key => $value):
        foreach($value as $v):?>
        <input type="text" value="<?php echo $v['name'] ?>" name="name"/> <br/>
        <input type="text" value="<?php echo $v['price'] ?>" name="price"/> <br/>
        <input type="hidden" value="<?php echo $v['id'] ?>" name="id"/> <br/>
        <input type="submit" class="btn" name="btn" value="UPDATE"/> <br/>
        <input type="hidden" name="m" value="update"/>
        <?php
        endforeach;
    endforeach;
    ?>
</form>

<?php
require_once("layouts/footer.php");