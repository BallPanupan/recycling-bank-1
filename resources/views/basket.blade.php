
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')
<br/>
@endsection

@section('content')
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container" >
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Panupan Coffe</a>
  </div>
  <div id="navbar" class="collapse navbar-collapse" >
    <ul class="nav navbar-nav">
      <li><a href="homeuser">หน้าแรก</a></li>
      <li class="active"><a href="basket">เครื่องดื่ม</a></li>
      <li><a href="#contact">ข้อความ <span class="badge"> 4</span></a></li>
    </ul>
  </div><!--/.nav-collapse -->
</div>
</nav>
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
  <table width="570" border="0">
    <tr>

      <td width="580" valign="top">
          <?php
            if (count($items)==0) {
              echo "ยังไม่มีสินค้าอยู่ในตะกร้า<br>";
            } else {
          ?>
            <form method="post" action="<?=url('basket_cal')?>">
            <table width="100%"  border="1">
                    <tr bgcolor="#E8E8E8">
                      <td width="6%"><center<b>ลบ</b></center</td>
                      <td width="60%"><center<b>ชื่อสินค้า</b></center</td>
                      <td width="12%"><center<b>จำนวน</b></center</td>
                      <td width="10%"><center<b>ราคา</b></center</td>
                      <td width="12%"><center<b>รวม</b></center</td>
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
                    echo "
                        <tr>
                  <td><center>
                    <input type='checkbox' name='prd_del[]' value='$id'>
                  </center></td>
                  <td>$id $name</td>
                  <td><center>
                    <input type='text' name='prd_qty[]' value='$qty' size='4' >
                  </center></td>
                  <td><center>$price</center></td>
                  <td><center>$unit</center></td>

                   </tr>";
                  }
                ?>
                  </table>
                  <p align="right">
              <?php echo "จำนวนเงินทั้งหมด $total บาท"; ?><br><br>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <input type="submit" name="calculate" value="คำนวณใหม่">
                    <input type="submit" name="complete" value="สั่งซื้อสินค้า">
                </p>
              </form>
          <?php
      }
          ?>
    </td>
  </tr>
</table>
</div>

</div>

@endsection

@section('footer')
@endsection
