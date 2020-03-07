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
    }

    </script>

</head>
<body >
  <div id="form-main">
    <div id="form-div">
        
    <form class="form" id="form1"  name = "Form" action="add_gepub.php" method ="GETS"  onsubmit="return validateForm()" >
        <p class="regis" style="font-size: 34px; color: white; margin-left: 17px; margin-top: 10px;">ลงทะเบียนสำหรับบุคคลทั่วไป</p>
        <p class="regis" style="font-size: 15px; margin-left: 0px; margin-top: 10px;">**หมายเหตุ: กรุณากรอกให้ครบทุกช่อง</p>
        
        <p class="name">
          <input name="name" type="text" class=" feedback-input" placeholder="ชื่อ-นามสกุล" id="name" />
        </p>
        
        <p class="email">
          <input name="email" type="text" class=" feedback-input" id="email" placeholder="Email" />
        </p>
        <p class="idcard">
            <input name="idcard" type="text" class="feedback-input" id="idcard" placeholder="เลขบัตรประชาชน" />
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
            <input name="pro" type="text" class="feedback-input" id="pro" placeholder="จังหวัดทะเบียน" />
          </p>
          <br>
        

        
     
        
        
        <div class="submit">
          <input type="submit" value="ลงทะเบียน" id="button-blue"/>
          <div class="ease"></div>  
        </div><br><br>
        <div class="submit">
        <a href="home2.php"><input type="button" value="ยกเลิก" id="button-blue" class="out"/></a>
            <div class="ease"></div>  
          </div>
        
      </form>
    </div>
   </body>
</html>
