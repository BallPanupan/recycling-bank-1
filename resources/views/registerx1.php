<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
<body>


  <script language="javascript">
  function fncSubmit()
  {

    if(document.form1.username.value == "")
    {
     alert('กรุณาใส่ username');
     document.form1.username.focus();
     return false;
    }


   if(document.form1.password.value == "")
   {
    alert('กรุณาใส่ รหัสผ่าน Password');
    document.form1.password.focus();
    return false;
   }

   if(document.form1.repassword.value == "")
   {
    alert('กรุณายืนยันรหัสผ่าน');
    document.form1.repassword.focus();
    return false;
   }

   if(document.form1.password.value != document.form1.repassword.value)
   {
    alert('ยืนยันรหัสผ่าน ไม่ถูกต้อง');
    document.form1.repassword.focus();
    return false;
   }

   if(document.form1.fname.value == "")
   {
    alert('กรุณาใส่ ชื่อ');
    document.form1.fname.focus();
    return false;
   }

   if(document.form1.lname.value == "")
   {
    alert('กรุณาใส่ สกุล');
    document.form1.lname.focus();
    return false;
   }

   document.form1.submit();
  }
  </script>


    <h1> Member : Insert </h1>
<form name="form1" method="post" action="registerx2" OnSubmit="return fncSubmit();">

  username :<input type="text" name ="username"> <br/>
  password :<input type="password" name ="password"> <br/>
  repassword :<input type="password" name ="repassword"> <br/>
  First name :<input type="text" name ="fname"> <br/>
   Last name :<input type="text" name ="lname"> <br/>
	email :<input type="text" name ="email"> <br/>
phone :<input type="text" name ="phone"> <br/>
	sex :<input type="text" name ="sex"> <br/>
birthday :<input type="text" name ="birthday"> <br/>


   <input type="submit">
   <input type="reset">

   <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>
</form>



</body>
