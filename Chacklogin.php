<?php

session_start();
//1.connect
require("connect.php");

$user = $_REQUEST['Username'];
$pass = $_REQUEST['Password'];

//echo $user . "," . $password;
$sql = "SELECT * FROM loginid WHERE Username='$user' AND Password = '$pass'";
//echo $sql;

//3.Execute SQL
$result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) == 1) { // login ok
                            $row = mysqli_fetch_assoc($result);
                            $_SESSION['Username'] = $row['Username'];
                            $_SESSION['Password'] = $row['Password'];
                            header("Location:re_per.php");
                        }
                        else{
                            header("Location:login.php");

                        }
?>