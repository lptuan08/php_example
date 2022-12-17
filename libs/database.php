<?php
// $conn = null;
require_once "infoDatabase.php"; 
function connectDatabase(){
    $conn = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE)
            or die ("connection faild:" .mysqli_connect_error());
    mysqli_set_charset($conn,'UTF-8');
    return $conn;
}


function closeDatabase(){
    global $conn;
    if($conn){
        mysqli_close($conn);
    }
}

function getDatabase($sql){
    $result = array();
    try {
        $conn = connectDatabase();
        $result = mysqli_query($conn,$sql);

    }finally{
        closeDatabase();
    }
    return $result;
}
//ham lay danh sach

function getListDatabase(){
    $result = getDatabase($sql);
    if($result !=null){
        while ($row = mysqli_fetch_assoc($result)){
            $data = $row;
        }
    }
    return $data;
}