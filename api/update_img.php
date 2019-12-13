<?php

include_once "../connect.php";

$id = $_POST['id'];
$cover = find("cover",$id);

if(!empty($_FILES['file']['tmp_name'])) {
    $cover['file'] = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"../img/".$cover['file']);

    save("cover",$cover);
}


to("../admin.php?do=cover");

?>