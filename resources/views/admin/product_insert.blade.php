@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')


@endsection

@section('content')
        <?=$menu?>
        <form action="<?=url('admin/product/insert2')?>" method="post" enctype="multipart/form-data">
          <P><B>เพิ่มสินค้าใหม่</B></P>
          <table width="400" border="0" cellspacing="1" cellpadding="0">
            <tr>
              <td width="101">ชื่อสินค้า</td>
              <td><input type="text" name="name_prd" size="40">* </td>
            </tr>
            <tr>
              <td>ประเภทสินค้า</td>
              <td>
            	  <select name="ref_id_type">
            	  <?php
                    foreach ($result as $row) {
                        $id_type=$row->id_type;
                        $name_type=$row->name_type;

                        echo "<option value='$id_type'>$name_type</option>";
                    }
            	  ?>
                </select> *
             </td>
          </tr>
            <tr>
              <td>ขนาด</td>
              <td>
                <select name="detail_prd" >
                	<option value="S" selected="selected">S</option>
                	<option value="M">M</option>
                	<option value="L">L</option>
                	<option value="XL">XL</option>
                </select>
              </td>
          </tr>
            <tr>
              <td>ราคา</td>
              <td><input type="text" name="price_prd" size="10"> บาท *</td>
            </tr>
            <tr>
            </tr>
            <tr>
              <td>รูปภาพ</td>
              <td><input  type="file" name="photo_prd"></td>
            </tr>
              <td>&nbsp;</td>
              <td>
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input name="submit" type="submit">
                <input name="RESET" type="reset" >
              </td>
            </tr>
        </table>
      </form>
      @endsection

      @section('footer')

      @endsection
