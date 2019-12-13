<?php

include_once "connect.php";

$exp = all("experience");

?>
<form action="./api/experience.php" method="post">
<div class="card">
    <h5 class="card-header">Management of work experience
    <span>
        <input type="button" value="add" onclick="op('#cover','#cvr','./view/experienceadd.php')">
        <input type="submit" value="confirm">
        <input type="reset" value="reset">
    </span>
    </h5>
    <div class="card-body">
   
    <?php
    foreach($exp as $e) {
    ?>
        <table>
            <tr>
                <td>Company</td>
                <td><input type="text" name="company[]" value="<?=$e['company'];?>"></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title[]" value="<?=$e['title'];?>"></td>
            </tr>
            <tr>
                <td>Since</td>
                <td><input type="text" name="time[]" value="<?=$e['time'];?>"></td>
            </tr>
            <tr>
                <td>Tenure</td>
                <td><input type="text" name="period[]" value="<?=$e['period'];?>"></td>
            </tr>
            <tr>
                <td>Pay</td>
                <td><input type="text" name="pay[]" value="<?=$e['pay'];?>"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="text" name="file[]" value="<?=$e['file'];?>"></td>
            </tr>
            <tr>
                <td>Content</td>
                <td><input type="text" name="content[]" value="<?=$e['content'];?>"></td>
            </tr>
            <tr>
                <td>Delete&nbsp;<i class="fas fa-trash-alt"></i></td>
                <td>
                    <input type="checkbox" name="del[]" value="<?=$e['id'];?>" style="width:20px">
                    <input type="hidden" name="id[]" value="<?=$e['id'];?>">
                </td>
            </tr>
        </table>

    <?
    }
    ?>
   
    </div>
</div>
</form>