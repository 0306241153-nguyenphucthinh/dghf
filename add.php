<?php
require_once("connect_db.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST["btnsubmit"])){
        $name=$_REQUEST["username"];
        $pass=$_REQUEST["password"];
        $email=$_REQUEST["email"];
        $hoten=$_REQUEST["hoten"];
        $conn=connect_db();
        if($conn){
          $sql="INSERT INTO quan_tri_vien(ten_dang_nhap,mat_khau,email,ho_ten)VALUES";
          $sql.="('".$name ."','".$pass."','" .$email."','".$hoten."')";
          if(mysqli_query(mysql:$conn,query:$sql)){
            echo"them du lieu thanh cong";
          }else{
            echo"loi thuc thi:$sql <br>". mysqli_error(mysql:$conn);
          }
          }
          mysqli_close(mysql:$conn);
        }
    }
?>