
@extends('layouts.main')
@section('title','Laravel Framework')

@section('header')<h4>
<nav class="navbar navbar-inverse navbar-fixed-top label-warning" style="height:15%">
        <center>
            <?php echo "$username";?></br>
              Money</p>
          <button type="submit" class="btn btn-success" onclick="window.location.href='homeuser'" >หน้าแรก</button>
          <button type="submit" class="btn btn-success" onclick="window.location.href='homeuser'" >บันทึกการขาย</button>
          <button type="submit" class="btn btn-success" onclick="window.location.href='homeuser'" >หน้าแรก</button></p>
        </center>
    </h4>
</nav>
@endsection

@section('content')
</br></br></br></br>


<div class="row">
<div class="col-md-3">

  <div class="row">
    <div class="col-xs-10">

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

<div class="row">

  <div class="col-sm-10">
    <button type="submit" class="btn btn-success" style="width:100%" onclick="window.location.href='price_list'" >ราคา</button>
            <img src="..\img\Price.jpg"  alt="Cinque Terre" width="100%">
        </p>
            <img src="..\img\Price.jpg"  alt="Cinque Terre" width="100%">
        </p>

    <div class="list-group" >
      <a href="#" class="list-group-item active">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>

  </div>

  <div class="col-sm-10">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>

  </div>

  <div class="col-sm-10">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>

  </div>

</div>


</div>

<div class="col-md-3">

<div class="row">
  <div class="col-sm-10">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-10">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-10">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>
  </div>
</div>

</div>

<div class="col-md-3">

<div class="row">
  <div class="col-sm-10">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>

  </div>

  <div class="col-sm-10">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>

  </div>

  <div class="col-sm-10">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>

  </div>
</div>


@endsection

@section('footer')



@endsection
