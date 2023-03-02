<?php
include('../connection.php');

$table = "register";
$error = [];

$name = $_POST['name'];
if (empty($name)) {
    $error['name'] = "Name Is Required";
}

$fname = $_POST['fname'];
if (empty($fname)) {
    $error['fname'] = "Father Name Is Required";
}

$mname = $_POST['mname'];
if (empty($mname)) {
    $error['mname'] = "Mother Name Is Required";
}

$number = $_POST['number'];
if (empty($number)) {
    $error['number'] = "Number Is Required";
}

$gmail = $_POST['mail'];
if (empty($gmail)) {
    $error['gmail'] = "Gmail Is Required";
}

$password = $_POST['password'];
if (empty($password)) {
    $error['password'] = "Password Is Required";
}

$length = count($error);
if ($length == 0) {
    $query = "insert into $table (name,father_name,mother_name,number,gmail,password)  VALUES('$name', '$fname', '$mname', '$number', '$gmail', '$password')";
    $res = $conn->query($query);
    if ($res) {
        echo "insert Successfully" . '</br>';
    }
} else {
    // $valid=implode('',$error);
    // header("Location:http://localhost/pagingnation/server/register.php?valid=$valid");
    echo "<pre>";
    print_r($error);
    echo "</pre>";
}
?>
<a href="http://localhost/pagingnation/server/register.php">Add</a>
<a href="http://localhost/pagingnation/server/view.php">View</a>