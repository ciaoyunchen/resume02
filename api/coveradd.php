<?php

include_once "../connect.php";

if(!empty($_FILES['file']['tmp_name'])) {
    $cover['file'] = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"../img/".$cover['file']);
}

if(!empty($_POST['text'])) {
    $cover['text'] = $_POST['text'];
}

save("cover",$cover);

to("../admin.php?do=cover");

?>