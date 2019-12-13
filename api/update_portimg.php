<?php

include_once "../connect.php";

$id = $_POST['id'];
$portfolio = find("portfolio",$id);

if(!empty($_FILES['file']['tmp_name'])) {
    $portfolio['file'] = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"../img/".$portfolio['file']);

    save("portfolio",$portfolio);
}


to("../admin.php?do=portfolio");

?>