<?php

include_once "../connect.php";

foreach($_POST['id'] as $key => $id) {

    if(!empty($_POST['del']) && in_array($id,$_POST['del'])) {

        del("special",$id);

    }else {

        $char = find("special",$id);
        $char['title'] = $_POST['title'][$key];
        $char['text'] = $_POST['text'][$key];
        $char['sh'] = (in_array($id,$_POST['sh']))?1:0;
        save("special",$char);

    }
    
}

to("../admin.php?do=character");
?>