<?php 
// login.php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>ลงทะเบียน</title>
<link href="login.css" rel="stylesheet" type="text/css"/>

<script>
        function ChackForm() {
        var x = document.forms["Form"]["Username"].value;
        var y = document.forms["Form"]["Password"].value;
        if (x == "" || x == null) {
            alert("กรุณากรอก Username และ Password  ");
            document.getElementById("Username").focus();
            return false;         
        }
        
        if (y == "" || y == null) {
            alert("กรุณากรอก Username และ Password ");
            document.getElementById("Password").focus();
            return false;
            }
    }

    </script>

</head>
<body >
    
    <div  id="label" >
        <img src="man.png" height="130" width="140" class="img1" />
        <img src="11.svg" height="130" width="140" class="img2" />
         <p>LOGIN</p> </div>
      
  <div id="form-main">
    <div id="form-div">
    <p id = "p1">PERSONNEL</p>
    <form class="form" name = "Form" action="Chacklogin.php"  onsubmit="return ChackForm()" >
			<input type="text" name = "Username" placeholder="Username" id = "input" class="in1 " style="color: black;" >
            <input type="password" name = "Password" placeholder="Password" id = "input" class="in2" >
            <div class="submit">
            <button type="submit" id="login-button">Login</button>
            <div class="ease"></div>  
          </div>
		</form>
    </div>
   </body>
</html>
