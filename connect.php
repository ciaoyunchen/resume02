<?php

$dsn = "mysql:host=localhost; charset=utf8; dbname=resume";
$pdo = new PDO($dsn,'root','iamdoris19930303');

// get one piece of data
function find($table,...$arg) {
    global $pdo;

    $sql = "select * from $table where ";

    if(is_array($arg[0])) {

        foreach($arg[0] as $key => $value) {
            $tmp[] = sprintf("`%s`='%s'",$key,$value);
        }
        $sql = $sql . implode(" && ",$tmp);

    }else {

        $sql = $sql . "`id`='" . $arg[0] . "'";

    }

    // echo $sql;
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

// get all data
function all($table,...$arg) {
    global $pdo;

    $sql = "select * from $table";

    if(!empty($arg[0])) {
        
        foreach($arg[0] as $key => $value) {
            $tmp[] = sprintf("`%s`='%s'",$key,$value);
        }
        $sql = $sql . " where " . implode(" && ",$tmp);

    }

    if(!empty($arg[1])) {

        $sql = $sql . $arg[1]; 

    }

    // echo $sql;
    return $pdo->query($sql)->fetchAll();
}

// count the data
function nums($table,...$arg) {
    global $pdo;

    $sql = "select count(*) from $table";

    if(!empty($arg[0])) {

        foreach($arg[0] as $key => $value) {
            $tmp[] = sprintf("`%s`='%s'",$key,$value);
        }
        $sql = $sql . " where " . implode(" && ",$tmp);

    }

    if(!empty($arg[1])) {

        $sql = $sql . $arg[1];

    }

    // echo $sql;
    return $pdo->query($sql)->fetchColumn();
}

// add or edit one piece of data 
function save($table,$data) {
    global $pdo;

    if(!empty($data['id'])) {

        foreach($data as $key => $value) {

            if($key!="id") {
                $tmp[] = sprintf("`%s`='%s'",$key,$value);
            }
    
        }
        $sql = "update $table set ".implode(",",$tmp)." where `id`='".$data['id']."'";

    }else {

        $column = "`" . implode("`,`",array_keys($data)) . "`";
        $values = "'" . implode("','",$data) . "'";
        $sql = "insert into $table ($column) values($values)";

    }

    // echo $sql;
    return $pdo->exec($sql);
}

// delete one piece of data
function del($table,...$arg) {
    global $pdo;

    $sql = "delete from $table where ";

    if(is_array($arg[0])) {

        foreach($arg[0] as $key => $value) {
            $tmp[] = sprintf("`%s`='%s'",$key,$value);
        }
        $sql = $sql . implode(" && ",$tmp);

    }else {

        $sql = $sql . "`id`='".$arg[0]."'";

    }

    // echo $sql;
    return $pdo->exec($sql);
}

// lead to another webpage
function to($path) {
    header("location:".$path);
}

?>