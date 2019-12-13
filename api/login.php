<?php

include_once "../connect.php";

$user = $_POST['user'];
$pw = $_POST['pw'];

$data = find("login",["user"=>"$user","password"=>"$pw"]);

if(!empty($data)){
    to("../admin.php");
}else{
    to("../index.php?r=1");
}
?>