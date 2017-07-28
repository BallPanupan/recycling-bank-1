
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')
{!! $header !!}
<div class="row">
<div class="col-md-9">
<div class="alert alert-info" role="alert">Phuket Moon</div>
</div>

<div class="col-md-3">
  <div class="alert alert-info" role="alert" >
    <div class="btn-group" role="group" aria-label="..." >
      <button type="button" class="btn btn-primary" onclick="window.location.href='../homeuser'">หน้าแรก</button>
      <button type="button" class="btn btn-primary">ขอความ <span class="badge">4</span></button>
    </div>
  </div>
</div>
</div>
@endsection

@section('content')
{{ $content }}
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
  - credit = 999 <p/>
  <br>
  <button type="submit" class="btn btn-warning" style="width:80%" onclick="window.location.href='basketx'" >สินค้าในตะกร้าสินค้า</button>
  <br>
  - ประวัติการลงประมูล <p/>
  - ต่ออายุ VIP <p/>
  <button type="submit" class="btn btn-danger" style="width:80%" onclick="window.location.href='logout'" >Logout</button>

</div>

<div class="col-md-3">

  <div class="col-sm-10">
    <div class="list-group">
      <a href="#" class="list-group-item active">
      ประเภทสินค้า
      </a>
      <a href="#" class="list-group-item">หนังสือ</a>
      <a href="#" class="list-group-item">เสื้อผ้า</a>
      <a href="#" class="list-group-item">คอมพิวเตอร์</a>
      <a href="#" class="list-group-item">ภาพยนตร์</a>
    </div>

  </div>

</div>

<div class="col-md-6">
  <table width="700" border="0">
    <tr>
      <td width="580" valign="top">
          <?php
            if (count($items)==0) {
              echo "ยังไม่มีสินค้าอยู่ในตะกร้า<br>";
            } else {
          ?>
            <form method="post" action="<?=url('basketx/cal')?>">
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
{{ $footer }}


@endsection
