<?php
require_once("layouts/header.php");
?>
<a href="index.php?m=new" class="btn">NEW</a>
<table>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>ACTION</td>
        </tr>
    <tbody>
        <?php 
            if(!empty($data)):
                foreach($data as $key => $value)
                    foreach($value as $v):?>
                    <tr>
                        <td><?php echo $v['id'] ?></td>
                        <td><?php echo $v['name'] ?></td>
                        <td>
                            <a class="btn" href="index.php?m=edit&id=<?php echo $v['id'] ?>">EDIT</a>
                            <a class="btn" href="index.php?m=delete&id=<?php echo $v['id'] ?>" onclick="return confirm('Are you sure?'); false">DELETE</a>
                        </td>
                    </tr>
                <?php endforeach ?>
        <?php else: ?>
            <tr>
                <td colspan="3">NO LOGS</td>
            </tr>
        <?php endif ?>
    </tbody>
</table>
<?php
require_once("layouts/footer.php");