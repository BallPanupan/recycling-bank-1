
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')

<div class="row">
<div class="col-md-9">
<div class="alert alert-info" role="alert">Panupan Coffe</div>
</div>

<div class="col-md-3">
  <div class="alert alert-info" role="alert" >
    <div class="btn-group" role="group" aria-label="..." >
      <button type="button" class="btn btn-primary" onclick="window.location.href='homeuser'">หน้าแรก</button>
      <button type="button" class="btn btn-primary" onclick="window.location.href=''">เครื่องดื่ม</button>
      <button type="button" class="btn btn-primary">ขอความ <span class="badge">4</span></button>
    </div>
  </div>
</div>
</div>
@endsection

@section('content')


<div class="row">

  <div class="col-md-3">

    <div class="row">
      <div class="col-xs-10">
        <a href="#" class="thumbnail" >
          <img src="http://localhost/moonp/img/prof.jpg">
        </a>
      </div>
    </div>

     Welcome :<?php echo "$username <br/>"; ?>

    <br>
    <button type="submit" class="btn btn-success" style="width:80%" onclick="window.location.href='shop'" >สั่งซื้อ กาแฟ</button>
    <p/><p/>
    <button type="submit" class="btn btn-warning" style="width:80%" onclick="window.location.href='basket'" >สินค้าในตะกร้าสินค้า</button>

    <br>
  <p/>
    <button type="submit" class="btn btn-danger" style="width:80%" onclick="window.location.href='logout'" >Logout</button>





  </div>

<div class="col-md-2">

  <table width="770" border="0">
    <tr>
      <td>

        <div class="list-group" style="width:80%">
          <a href="#" class="list-group-item active">
            <center>ประเภทเครื่องดื่ม</center>
          </a>
              <a href="type1" class="list-group-item">เอสเพรสโซ่</a>
              <a href="type2" class="list-group-item">กาแฟดำชงสด</a>
              <a href="type3" class="list-group-item">ช็อคโกแลต</a>
              <a href="type4" class="list-group-item">กาแฟปั่น</a>
              <a href="type5" class="list-group-item">ครีมปั่น</a>
              <a href="type6" class="list-group-item">น้ำผลไม้</a>
              <a href="type7" class="list-group-item">ชาชงสด</a>
        </div>

      </td>

      <td width="580" valign="top">
      <br><br><br>

    </td>
  </tr>
</table>

</div>
<div class="col-md-7">
  <?php
  if (count($items)==0) {
      echo "ยังไม่มีสินค้าอยู่ในตะกร้า<br>";
  } else {
 ?>
</p>
 <form  method="post" action="<?=url('order/insert')?>">
   <p><h3>รายการสั่งซื้อสินค้า</h3></p>
  <table width="400" border="0" cellspcing="1" cellpadding="0">
     <tr>
       <td width="101">username : </td>
       <td><input type="text" name="fullname" size="35" value="<?=$username?>">* </td>
     </tr>
     <tr>
       <td>เบอร์โทรศัพท์ :</td>
       <td><input type="text" name="tel" >
       </td>
   </tr>
     <tr>
       <td>เวลาเข้ารับสินค้า</td>
       <td><input type="time" name="address">* </td>
   </tr>
</table><br>
  <table width="600"  border="1">
           <tr bgcolor="#E8E8E8">
             <td width="6%"><center><b>รหัสสินค้า</b></center></td>
             <td width="60%"><center><b>ชื่อสินค้า</b></center></td>
             <td width="12%"><center><b>จำนวน</b></center></td>
             <td width="10%"><center><b>ราคา</b></center></td>
             <td width="12%"><center><b>ทั้งหมด</b></center></td>
         </tr>
     <?php
         $total=0;
         foreach ($items as $i) {
             $id=$i['id'];
             $name=$i['name'];
             $price=$i['price'];
             $qty=$i['qty'];

             $unit=$price * $qty;
             $total=$total+$unit;
          echo "<tr>
            <td><center>$id</center></td>
            <td>&nbsp;$name</td>
            <td><center>$qty</center></td>
            <td><center>$price</center></td>
            <td><center>$unit</center></td>
             </tr>";
      } // end foreach
      ?>
   </table><br>
  <?php echo "จำนวนทั้งหมด $total บาท"; ?>
       <br><br>
       <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
       <input  type="hidden" name="total" value="<?=$total?>">
       <input type="submit"  value="ยืนยันการสั่งซื้อ">
       <input type="reset"  value="เคลียร์">
   </p>
</form>
 <?php
  }
 ?>
</div>

</div>

@endsection

@section('footer')

@endsection
