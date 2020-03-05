<?php
//step1.connect
require("connect.php");



$Name = $_REQUEST['name'];
$Email = $_REQUEST['email'];
$idcard = $_REQUEST['idcard'];
$idline = $_REQUEST['idline'];
$Phone = $_REQUEST['Phone'];
$lip = $_REQUEST['lip'];
$pro = $_REQUEST['pro'];


// echo "name:". $name . "<br/>";
// echo "email:". $email . "<br/>";
// echo "status:". $status . "<br/>";

$sql = "INSERT INTO regepub (licenseplate,name,email,idcard,lineaccount,phone,province) 
                         VALUE('$lip', '$Name', '$Email', '$idcard', '$idline', '$Phone', '$pro ')";
// echo $sql;

//$sql .="('". $status_th ."','" . $status_en ."')";
//$sql .="(".$status_id .",'" . $status_th ."','" . $status_en ."')";

if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:re_Gepub.php"); 






?>