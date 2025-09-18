<?php
function connect_db():bool|mysqli{
    $host="localhost";
    $username="root";
    $password="";
    $dbname="my_db";
    $conn=mysqli_connect(hostname:$host,username:$username,password:$password);
    if(!$conn){
        die("ket noi csdl that bai:".mysqli_connect_error());
    }
    mysqli_select_db(mysql:$conn,database:$dbname);
    $conn=mysqli_connect(hostname:$host,username:$username,password: $password,database: $dbname);
    if(!$conn){ 
        die("ket noi csdl that bai:".mysqli_connect_error());
    }
    return $conn;

}