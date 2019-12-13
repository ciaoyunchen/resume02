<?php

include_once "../connect.php";

if(!empty($_POST['company'])) {
    $exp['company'] = $_POST['company'];
    $exp['title'] = $_POST['title'];
    $exp['time'] = $_POST['time'];
    $exp['period'] = $_POST['period'];
    $exp['pay'] = $_POST['pay'];
    $exp['file'] = $_POST['file'];
    $exp['content'] = $_POST['content'];
}

save("experience",$exp);

to("../admin.php?do=experience");

?>