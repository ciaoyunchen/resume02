<?php

include_once "../connect.php";

$contact = find("contact",1);

$contact['tel'] = $_POST['tel'];
$contact['email'] = $_POST['email'];


save("contact",$contact);

to("../admin.php?do=contact");
?>