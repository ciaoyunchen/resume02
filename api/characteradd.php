<?php

include_once "../connect.php";

if(!empty($_POST['title'])) {
    $special['title'] = $_POST['title'];
    $special['text'] = $_POST['text'];
}

save("special",$special);

to("../admin.php?do=character");

?>