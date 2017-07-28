@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')


@endsection

@section('content')
        <?=$menu?>
    	<P><strong>แสดงสินค้า</strong></P>
    	<table border=1>
    		<tr bgcolor=#E8E8E8>
    			<td><center><b>รหัสสินค้า</b></center></td>
    			<td><center><b>สินค้า</b></center></td>
    			<td><center><b>ราคา</b></center></td>
          <td><center><b>ขนาด</b></center></td>
    			<td><center><b>แก้ไข</b></center></td>
    			<td><center><b>ลบ</b></center></td>
    		</tr>
         <?php

        foreach ($result as $row) {
            $id_prd = $row->id_prd;
            $name_prd = $row->name_prd;
            $detail_prd= $row->detail_prd;
            $price_prd = $row->price_prd;

            $link1=url('admin/product/update/'.$id_prd);
            $link2=url('admin/product/delete/'.$id_prd);

            echo "<tr>
    			<td>$id_prd</td>
    			<td>$name_prd</td>
    			<td>$price_prd</td>
          <td><center>$detail_prd</center></td>
    			<td><a href='$link1'>แก้ไข</a></td>
    			<td><a href='$link2'onclick=\"return confirm('ต้องการลบสินค้านี้หรือไม่')\">ลบ</a></td>
    			</tr>";
        }
        ?>
    	<table>
        @endsection

        @section('footer')

        @endsection
