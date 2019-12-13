<?php

include_once "connect.php";
$contact = find("contact",1);

?>

<form action="./api/contact.php" method="post">
<div class="card">
    <h5 class="card-header">Management of contact detail
    <span>
        <input type="submit" value="confirm">
        <input type="reset" value="reset">
    </span>
    </h5>
    <div class="card-body">

    <table>
        <tr>
            <td>Tel</td>
            <td><input type="text" name="tel" value="<?=$contact['tel'];?>"></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input type="text" name="email" value="<?=$contact['email'];?>"></td>
        </tr>
    </table>

    </div>
</div>
</form>