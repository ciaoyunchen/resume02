<?php

include_once "../connect.php";

foreach($_POST['id'] as $key => $id) {

    if(!empty($_POST['del']) && in_array($id,$_POST['del'])) {

        del("cover",$id);

    }else {
        $cover = find("cover",$id);
        $cover['text'] = $_POST['text'][$key];
        $cover['sh'] = ($id==$_POST['sh'])?1:0;
        save("cover",$cover);
    }
    
}

to("../admin.php?do=cover");
?>