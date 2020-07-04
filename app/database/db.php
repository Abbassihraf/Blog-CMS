<?php

require('connect.php');

function dd($value){
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}


function executeQuery($sql, $data){
    global $con;
    $stmt = $con -> prepare($sql);
    $values= array_values($data);
    $types =str_repeat('s', count($values));
    $stmt -> bind_param($types, ...$values);
    $stmt -> execute();
    return $stmt;
}

function selectAll($table, $conditions =[]) {
    global $con;
    $sql = "SELECT * FROM $table";
    if(empty($conditions)){
        $stmt = $con -> prepare($sql);
        $stmt -> execute();
        $records = $stmt -> get_result() -> fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    else{
        // $sql = "SELECT * FROM $table WHERE username='Achraf' AND admin=1";  
        $i = 0;
        foreach ($conditions as $key => $value){
            if($i ===0){
                $sql = $sql . " WHERE $key=?";
            }
            else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
 
        $stmt =  executeQuery($sql, $conditions);
        $records = $stmt -> get_result() -> fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}



function selectOne($table, $conditions) {
    global $con;
    $sql = "SELECT * FROM $table";

        // $sql = "SELECT * FROM $table WHERE username='Achraf' AND admin=1";  
        $i = 0;
        foreach ($conditions as $key => $value){
            if($i ===0){
                $sql = $sql . " WHERE $key=?";
            }
            else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }

        $sql = $sql . " LIMIT 1";
        $stmt =  executeQuery($sql, $conditions);
        $records = $stmt -> get_result() -> fetch_assoc();
        return $records;
}

$conditions= [
    'admin' => 0,
    'username' => 'Achraf'
];

$users = selectOne('users', $conditions);
dd($users);

