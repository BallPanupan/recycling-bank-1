
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')
{!! $header !!}
<div class="row">
<div class="col-md-9">
<div class="alert alert-info" role="alert">Panupan Coffee</div>
</div>

<div class="col-md-3">
  <div class="alert alert-info" role="alert" >
    <div class="btn-group" role="group" aria-label="..." >
      <button type="button" class="btn btn-primary" onclick="window.location.href='homeuser'">หน้าแรก</button>
      <button type="button" class="btn btn-primary" onclick="window.location.href=''">เครื่องดื่ม</button>
      <button type="button" class="btn btn-primary">ข้อความ <span class="badge">4</span></button>
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

   <br>
   <button type="submit" class="btn btn-success" style="width:80%" onclick="window.location.href='shop'" >สั่งซื้อ กาแฟ</button>
   <p/><p/>
   <button type="submit" class="btn btn-warning" style="width:80%" onclick="window.location.href='basket'" >สินค้าในตะกร้าสินค้า</button>

   <br>
 <p/>
   <button type="submit" class="btn btn-danger" style="width:80%" onclick="window.location.href='logout'" >Logout</button>

  </div>

<div class="col-md-3">

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
<div class="col-md-6">
        <center><b>:: เลือกประเภทเครื่องดื่ม :: </b></center>
</div>

</div>

@endsection

@section('footer')
{{ $footer }}
@endsection
