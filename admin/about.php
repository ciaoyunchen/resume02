<?php

include_once "connect.php";

$about = find("about",1);

?>

<form action="./api/about.php" method="post">
<div class="card">
    <h5 class="card-header">Management of personal information
    <span>
        <input type="submit" value="confirm">
        <input type="reset" value="reset">
    </span>
    </h5>
    <div class="card-body">

    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?=$about['name'];?>"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" name="age" value="<?=$about['age'];?>"></td>
        </tr>
        <tr>
            <td>Education</td>
            <td><input type="text" name="education" value="<?=$about['education'];?>"></td>
        </tr>
        <tr>
            <td>Abilities</td>
            <td><input type="text" name="abilities" value="<?=$about['abilities'];?>"></td>
        </tr>
        <tr>
            <td>Skills</td>
            <td><input type="text" name="skills" value="<?=$about['skills'];?>"></td>
        </tr>
    </table>

    </div>
</div>
</form>
