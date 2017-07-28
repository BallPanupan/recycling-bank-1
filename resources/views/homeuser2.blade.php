
@extends('layouts.main')

@section('title','Laravel Framework')
@section('header')

{!! $header !!}
<div class="alert alert-info" role="alert">Phuket Moon</div>
@endsection

@section('content')
{{ $content }}

<div class="row">

<div class="col-md-3">
  <div class="row">
    <div class="col-xs-10">
      <a href="#" class="thumbnail">
        <img src="http://localhost/moonp/img/prof.jpg">
      </a>
    </div>
  </div>

   Welcome :<?php echo "$username <br/>"; ?>
  - credit = 999 <p/>
  <br>

  - ประวัติการลงประมูล <p/>
  - ต่ออายุ VIP <p/>
  <a href="logout">Logout</a>




</div>

<div class="col-md-3">

<div class="row">
  <div class="col-sm-10">
    <div class="thumbnail">
      <img src="http://localhost/moonp/img/prof.jpg">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-10">
    <div class="thumbnail">
      <img src="http://localhost/moonp/img/prof.jpg">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-10">
    <div class="thumbnail">
      <img src="http://localhost/moonp/img/prof.jpg">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>

</div>


</div>

<div class="col-md-3">

<div class="row">
  <div class="col-sm-10">
    <div class="thumbnail">
      <img src="http://localhost/moonp/img/prof.jpg">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-10">
  <div class="thumbnail">
    <img src="http://localhost/moonp/img/prof.jpg">
    <div class="caption">
      <h3>Thumbnail label</h3>
      <p>...</p>
      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
    </div>
  </div>
</div>

<div class="col-sm-10">
  <div class="thumbnail">
    <img src="http://localhost/moonp/img/prof.jpg">
    <div class="caption">
      <h3>Thumbnail label</h3>
      <p>...</p>
      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
    </div>
  </div>
</div>

</div>

<div class="col-md-3">

<div class="row">
  <div class="col-sm-10">
    <div class="thumbnail">
      <img src="http://localhost/moonp/img/prof.jpg">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-10">
    <div class="thumbnail">
      <img src="http://localhost/moonp/img/prof.jpg">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-10">
    <div class="thumbnail">
      <img src="http://localhost/moonp/img/prof.jpg">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>

@endsection

@section('footer')
{{ $footer }}


@endsection
