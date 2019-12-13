<?php

include_once "../connect.php";

foreach($_POST['id'] as $key => $id) {

    if(!empty($_POST['del']) && in_array($id,$_POST['del'])) {

        del("experience",$id);

    }else {

        $exp = find("experience",$id);
        $exp['company'] = $_POST['company'][$key];
        $exp['title'] = $_POST['title'][$key];
        $exp['time'] = $_POST['time'][$key];
        $exp['period'] = $_POST['period'][$key];
        $exp['pay'] = $_POST['pay'][$key];
        $exp['file'] = $_POST['file'][$key];
        $exp['content'] = $_POST['content'][$key];
        save("experience",$exp);
    }
    
}

to("../admin.php?do=experience");
?>