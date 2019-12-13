<?php

include_once "../connect.php";


foreach($_POST['id'] as $key => $id) {

    if(!empty($_POST['del']) && in_array($id,$_POST['del'])) {

        del("portfolio",$id);

    }else {
        $port = find("portfolio",$id);
        $port['http'] = $_POST['http'][$key];
        $port['sh'] = (in_array($id,$_POST['sh']))?1:0;
        save("portfolio",$port);
    }
   
}

to("../admin.php?do=portfolio");
?>