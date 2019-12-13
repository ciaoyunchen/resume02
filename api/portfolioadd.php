<?php

include_once "../connect.php";

if(!empty($_FILES['file']['tmp_name'])) {
    $portfolio['file'] = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"../img/".$portfolio['file']);
}

if(!empty($_POST['http'])) {
    $portfolio['http'] = $_POST['http'];
}

save("portfolio",$portfolio);

to("../admin.php?do=portfolio");

?>