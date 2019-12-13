<?php

include_once "../connect.php";

$about = find("about",1);

$about['name'] = $_POST['name'];
$about['age'] = $_POST['age'];
$about['education'] = $_POST['education'];
$about['abilities'] = $_POST['abilities'];
$about['skills'] = $_POST['skills'];

save("about",$about);

to("../admin.php?do=about");
?>