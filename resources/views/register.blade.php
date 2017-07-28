
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')
{!! $header !!}

@endsection

@section('content')
{{ $content }}
<center>
<div class="row">

<div class="col-md-2">


</div>

<div class="col-md-7">



    <h1>สมัครใช้งาน<h1>
    <h3>สมัครฟรี ไม่เสียค่าใช้จ่าย<h3>
    <form name="form1" method="post" action="register2" OnSubmit="return fncSubmit();">

      <div class="input-group input-group-lg" style="width:100%">
        <input type="text" name ="username" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" >

      </div>
<p/>
      <div class="input-group input-group-lg" style="width:100%">
        <input type="password" name ="password" class="form-control" placeholder="password" aria-describedby="sizing-addon1" >

      </div>
<p/>
      <div class="input-group input-group-lg" style="width:100%">
        <input type="password" name ="repassword" class="form-control" placeholder="Repassword" aria-describedby="sizing-addon1" >

      </div>
<p/>
      <div class="input-group input-group-lg" style="width:100%">
        <input type="text" name ="fname" class="form-control" placeholder="First name" aria-describedby="sizing-addon1" >
        <span class="input-group-addon" id="sizing-addon2">สกุล</span>
        <input type="text" name ="lname" class="form-control" placeholder="Last name" aria-describedby="sizing-addon1" >
      </div>
<p/>
      <div class="input-group input-group-lg" style="width:100%">
        <input type="email" name ="email" class="form-control" placeholder="E-mail" aria-describedby="sizing-addon1" >

      </div>
<p/>
      <div class="input-group input-group-lg" style="width:100%">
        <input type="text" name ="phone" class="form-control" placeholder="Phone number" aria-describedby="sizing-addon1" >

      </div>
<p/>
      <div class="input-group input-group-lg" style="width:100%">
            <select name ="sex" class="form-control" aria-describedby="sizing-addon1">
              <option value="ชาย">ชาย</option>
              <option value="หญิง">หญิง</option>
            </select>

      </div>
<p/>
          <div class="input-group input-group-lg" style="width:100%">
            <input type="date" name ="birthday" class="form-control" placeholder="birthday" aria-describedby="sizing-addon1">

          </div>
<p/>
<p/>
<button type="submit" class="btn btn-primary" style="width:100%" ><h4>สมัครใช่งาน</h4></button>

     <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>
  </form>



</div>

<div class="col-md-3">
  <form action="login2" method="post">

      <caption><h3><b>เข้าสู่ระบบ</b></h3></caption>

        <div class="form-group" style="width:100%" >
          <input type="text" name ="username" class="form-control"id="exampleInputEmail1"placeholder="username" >
        </p>
          <input type="password" name="password" class="form-control"id="exampleInputPassword1"placeholder="Password">
        </p>
          <button type="submit" class="btn btn-primary" style="width:100%"><h5><b> เข้าสู่ระบบ </b></h5></button>
        </div>

    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
  </form>
        <button type="submit" class="btn btn-success" style="width:100%" onclick="window.location.href='register'" ><h5><b> สมัครสมาชิก </b></h5></button>


</div>

</center>
@endsection

@section('footer')
{{ $footer }}
@endsection
