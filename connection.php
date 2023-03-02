<?php
$server='localhost';
$username='root';
$password='';
$database='assignment1';
$conn=mysqli_connect($server,$username,$password,$database);
if(mysqli_connect_errno()){
    echo "something Went Wrong";
}else{
    // echo "connection successfully";
}
