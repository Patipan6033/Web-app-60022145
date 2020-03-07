<?php   

session_start();
//if(isset($_SESSION['user']) == null){
 if($_SESSION['Username'] == null){
   header("Location:login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>ลงทะเบียน</title>
<link href="h1.css" rel="stylesheet" type="text/css"/>
<script> 
        function validateForm() {
        var a = document.forms["Form"]["name"].value;
        var b = document.forms["Form"]["email"].value;
        var c = document.forms["Form"]["idcard"].value;
        var d = document.forms["Form"]["idline"].value;
        var e = document.forms["Form"]["Phone"].value;
        var f = document.forms["Form"]["lip"].value;
        var g = document.forms["Form"]["pro"].value;
        var h = document.forms["Form"]["status"].value;

        if (a == "" || a == null) {
            alert("กรุณากรอกข้อมูลให้ครบตามที่กำหนดไว้");
            document.getElementById("name").focus();
            return false;         
        }
        
        if (b == "" || b == null) {
            alert("กรุณากรอกข้อมูลให้ครบตามที่กำหนดไว้");
            document.getElementById("email").focus();
            return false;
            }
        if (c == "" || c == null) {
            alert("กรุณากรอกข้อมูลให้ครบตามที่กำหนดไว้t");
            document.getElementById("idcard").focus();
            return false;         
        }
        
        if (d == "" || d == null) {
            alert("กรุณากรอกข้อมูลให้ครบตามที่กำหนดไว้");
            document.getElementById("idline").focus();
            return false;
            }
        if (e == "" || e == null) {
            alert("กรุณากรอกข้อมูลให้ครบตามที่กำหนดไว้");
            document.getElementById("Phone").focus();
            return false;
            }
         if (f == "" || f == null) {
            alert("กรุณากรอกข้อมูลให้ครบตามที่กำหนดไว้");
            document.getElementById("lip").focus();
            return false;
            }
         if (g == "" || g == null) {
            alert("กรุณากรอกข้อมูลให้ครบตามที่กำหนดไว้");
            document.getElementById("pro").focus();
            return false;
            }
          if (h == "" || h == null) {
            alert("กรุณากรอกข้อมูลให้ครบตามที่กำหนดไว้");
            document.getElementById("status").focus();
            return false;
            }
    }

    </script>


</head>
<body >
  <div id="form-main">
    <div id="form-div">
        
      <form class="form" id="form1"  name = "Form" action="add_per.php" method ="GETS"  onsubmit="return validateForm()">
        <p class="regis" style="font-size: 35px; color: white ; margin-left: 30px; margin-top: 10px;">ลงทะเบียนสำหรับบุคลากร</p>
        <p class="regis" style="font-size: 15px; margin-left: 0px; margin-top: 10px;">**หมายเหตุ: กรุณากรอกให้ครบทุกช่อง</p>
        
        <p class="name">
          <input name="name" type="text" class="feedback-input" placeholder="ชื่อ-นามสกุล" id="name" />
        </p>
        
        <p class="email">
          <input name="email" type="text" class=" feedback-input" id="email" placeholder="Email" />
        </p>
        
        <p class="stu" style="margin-left: 100px; margin-top: -7px; font-size: 20px; color: white;">
          
          <input name="status" type="radio" class="select"  value="นิสิต"/> 
          <label style="margin-left: 10px;">นิสิต</label>
          <input name="status" type="radio" class="select" style="margin-left: 50px;" value="บุคคลกร"/> 
          <label style="margin-left: 10px;">บุคคลกร</label>
        </p>
       
        <p class="idcard">
            <input name="idcard" type="text" class=" feedback-input" id="idcard" placeholder="เลขบัตรประชาชน" />
          </p>
          <p class="idline">
            <input name="idline" type="text" class=" feedback-input" id="idline" placeholder="LineID" />
          </p>
          <p class="Phone">
            <input name="Phone" type="text" class=" feedback-input" id="Phone" placeholder="เบอร์โทรศัพท์" />
          </p>
          <p class="lip">
            <input name="lip" type="text" class=" feedback-input" id="lip" placeholder="เลขทะเบียนรถยนต์" />
          </p>
          <p class="pro">
            <input name="pro" type="text" class=" feedback-input" id="pro" placeholder="จังหวัดทะเบียน" />
          </p>
          <br>
        
        <div class="submit">
          <input type="submit" value="ลงทะเบียน" id="button-blue"/>
          <div class="ease"></div>  
        </div><br><br>
      
        
      </form>
      <form action="out.php" >
        <div class="submit">
        <a href="login.php"><input type="submit"  value="ยกเลิก" id="button-blue" class="out"/></a>
            <div class="ease"></div>  
          </div>
        </form>
    </div>
   </body>
</html>
