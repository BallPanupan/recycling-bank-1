
@extends('layouts.main')
@section('title','Laravel Framework')

@section('header')
<h4>
<nav class="navbar navbar-inverse navbar-fixed-top label-warning" style="height:15%">
        <center>
            <?php echo "$username";?></br>
              Money</p>
          <button type="submit" class="btn btn-success" style="width:25%" onclick="window.location.href='homeuser'" >หน้าแรก</button>
          <button type="submit" class="btn btn-success" style="width:25%" onclick="window.location.href='homeuser'" >หน้าแรก</button>
          <button type="submit" class="btn btn-success" style="width:25%" onclick="window.location.href='homeuser'" >หน้าแรก</button></p>
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

   Welcome :

  <br>
  <button type="submit" class="btn btn-success" style="width:80%" onclick="window.location.href='shop'" >สั่งซื้อ กาแฟ</button>
  <p/><p/>
  <button type="submit" class="btn btn-warning" style="width:80%" onclick="window.location.href='basket'" >สินค้าในตะกร้าสินค้า</button>

  <br>
<p/>
  <button type="submit" class="btn btn-danger" style="width:80%" onclick="window.location.href='logout'" >Logout</button>

</div>

    <div class="col-md-9">

          <table border="1" width="100%">
            <tr bgcolor=#E8E8E8>
              <td  width="50%" ><center><b>ประเภท</b></center></td>
              <td ><center><b>ราคา</b></center></td>
              <td><center><b>หน่วย</b></center></td>
            </tr>

             <?php

            foreach ($result as $row) {
                $id_type = $row->id_type;
                $name_type = $row->name_type;
                $price_type = $row->price_type;

            echo "<tr>
                    <td>$name_type</td>
                    <td ><center>$price_type</center></td>
                    <td><center>กก.</center></td>
              </tr>";
            }
            ?>
          <table>
    </div>


@endsection

@section('footer')



@endsection
