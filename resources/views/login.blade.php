
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')
{!! $header !!}

@endsection

@section('content')
{{ $content }}


<div class="row">


<div class="col-md-4">

</div>

<div class="col-md-4">
  <form action="login2" method="post">
        <center><h1><B>Bank</B></h1></center>
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

<div class="col-md-4">
</br>
  <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">HTML</a></li>
        <li><a href="#">CSS</a></li>
        <li><a href="#">JavaScript</a></li>
      </ul>
    </div>

</div>
</center>
</div>


@endsection

@section('footer')
{{ $footer }}
@endsection
