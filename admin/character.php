<?php

include_once "connect.php";

$char = all("special");


?>

<form action="./api/character.php" method="post">
<div class="card">
    <h5 class="card-header">Management of character
    <span>
        <input type="button" value="add" onclick="op('#cover','#cvr','./view/characteradd.php')">
        <input type="submit" value="confirm">
        <input type="reset" value="reset">
    </span>
    </h5>
    <div class="card-body">

    <?php
    foreach($char as $c) {
    ?>
        <table>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title[]" value="<?=$c['title'];?>"></td>
            </tr>
            <tr>
                <td>Text</td>
                <td><textarea name="text[]" cols="80" rows="5"><?=$c['text'];?></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    Show&nbsp;<input type="checkbox" style="width:50px" name="sh[]" value="<?=$c['id'];?>" <?=($c['sh']==1)?"checked":"";?>>
                    Delete&nbsp;<input type="checkbox" style="width:50px" name="del[]" value="<?=$c['id'];?>">
                </td>
            </tr>

            <input type="hidden" name="id[]" value="<?=$c['id'];?>">
        </table>

    <?
    }
    ?>


    </div>
</div>
</form>