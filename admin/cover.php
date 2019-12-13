<?php

include_once "connect.php";

?>

<form action="./api/cover.php" method="post">
<div class="card">
    <h5 class="card-header">Management of cover image
    <span>
        <input type="button" value="add" onclick="op('#cover','#cvr','./view/coveradd.php')">
        <input type="submit" value="confirm">
        <input type="reset" value="reset">
    </span>
    </h5>
    <div class="card-body">

    <table>
        <tr>
            <td width="45%">Image</td>
            <td width="40%">Text</td>
            <td width="5%">Show</td>
            <td width="5%">Delete</td>
            <td width="5%">Update</td>
        </tr>
    

    <?php
    $cover = all("cover");
    foreach($cover as $c) {
    ?>
        
        <tr id="covertr">
            <td><img src="./img/<?=$c['file'];?>" style="width:100%"></td>
            <td><input type="text" name="text[]" value="<?=$c['text'];?>"></td>
            <td><input type="radio" name="sh" value="<?=$c['id'];?>" <?=($c['sh']==1)?"checked":"";?>></td>
            <td><input type="checkbox" name="del[]" value="<?=$c['id'];?>"></td>
            <td><input type="button" value="update" onclick="op('#cover','#cvr','./view/update_cover.php?id=<?=$c['id'];?>')" style="border-radius:5px"></td>
            <td><input type="hidden" name="id[]" value="<?=$c['id'];?>"></td>
        </tr>
       
    <?
    }
    ?>

    </table>    

    </div>
</div>
</form>