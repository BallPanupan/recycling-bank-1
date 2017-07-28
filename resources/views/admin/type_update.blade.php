@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')


@endsection

@section('content')
        <?php
            foreach ($result as $row) {
                $id_type=$row->id_type;
                $name_type=$row->name_type;
                $price_type=$row->price_type;
            }
        ?>
        <form action="<?=url('admin/type/update2')?>" method="post"
            enctype="multipart/form-data">
          <P><B>แก้ไขสินค้า</B></P>
          <table width="400" border="0" cellspacing="1" cellpadding="0">
            <tr>
              <td width="101">ชื่อ ประเภท</td>
              <td><input type="text" name="name_type" size="40"
                   value="<?=$name_type?>"> </td>
            </tr>

            <tr>
              <td>ราคา</td>
              <td><input type="text" name="price_type" size="10" value="<?=$price_type?>"> บาท *</td>
            </tr>
              <td>&nbsp;</td>
              <td>
                <input type="hidden" name="id_type" value="<?=$id_type?>">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input name="submit" type="submit">
                <input name="RESET" type="reset" >
              </td>
            </tr>
        </table>
      </form>
    </body>
</html>

@endsection

@section('footer')



@endsection
