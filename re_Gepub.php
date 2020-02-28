<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>ลงทะเบียน</title>
<link href="h3.css" rel="stylesheet" type="text/css"/>
<script>
        function validateForm() {
        var x = document.forms["myForm"]["name"].value;
        var y = document.forms["myForm"]["email"].value;
        if (x == "" || x == null) {
            alert("status Thai must be filled out");
            document.getElementById("status_TH").focus();
            return false;         
        }
        
        if (y == "" || y == null) {
            alert("Name must be filled out");
            document.getElementById("status_ENG").focus();
            return false;
            }
    }

    </script>

</head>
<body >
  <div id="form-main">
    <div id="form-div">
        
    <form class="form" id="form1"  name = "myForm" action="add_gepub.php" method ="GETS"  onsubmit="return validateForm()" >
        <p class="regis" style="font-size: 34px; color: white; margin-left: 17px; margin-top: 10px;">ลงทะเบียนสำหรับบุคคลทั่วไป</p>
        <p class="regis" style="font-size: 15px; color: white; margin-left: 0px; margin-top: 10px;">**หมายเหตุ: กรุณากรอกให้ครบทุกช่อง</p>
        
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
