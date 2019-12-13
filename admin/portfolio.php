<?php

include_once "connect.php";

?>

<form action="./api/portfolio.php" method="post">
<div class="card">
    <h5 class="card-header">Management of your portfolio
    <span>
        <input type="button" value="add" onclick="op('#cover','#cvr','./view/portfolioadd.php')">
        <input type="submit" value="confirm">
        <input type="reset" value="reset">
    </span>
    </h5>
    <div class="card-body">

    <table>
        <tr>
            <td width="45%">File</td>
            <td width="40%">Link</td>
            <td width="5%">Show</td>
            <td width="5%">Delete</td>
            <td width="5%">Update</td>
        </tr>

    <?php
    $portfolio = all("portfolio");
    foreach($portfolio as $p) {
    ?>
        <tr id="covertr">
            <td><img src="./img/<?=$p['file'];?>" style="width:100%"></td>
            <td><input type="text" name="http[]" value="<?=$p['http'];?>"></td>
            <td><input type="checkbox" name="sh[]" value="<?=$p['id'];?>" <?=($p['sh']==1)?"checked":"";?>></td>
            <td><input type="checkbox" name="del[]" value="<?=$p['id'];?>"></td>
            <td><input type="button" value="update" onclick="op('#cover','#cvr','./view/update_portimg.php?id=<?=$p['id'];?>')" style="border-radius:5px"></td>
            <td><input type="hidden" name="id[]" value="<?=$p['id'];?>"></td>
        </tr>
       
    <?
    }
    ?>

    </table>    

    </div>
</div>
</form>