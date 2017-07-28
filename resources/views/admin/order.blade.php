@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')


@endsection

@section('content')
        <?=$menu?>
    	<P><strong>ใบสั่งซื้อสินค้า</strong></P>
    	<table border=1>
    		<tr bgcolor=#E8E8E8>
    			<td><center><b>รหัส</b></center></td>
    			<td><center><b>ชื่อ นามสกุล</b></center></td>
    			<td><center><b>เบอร์โทรศัพท์</b></center></td>
    			<td><center><b>ราคารวม</b></center></td>
                <td><center><b>แสดง</b></center></td>
    			<td><center><b>ลบ</b></center></td>
    		</tr>
         <?php

         foreach ($result as $row) {
             $id_order=$row->id_order;
             $fullname=$row->fullname;
             $tel=$row->tel;
             $total=$row->total;

             $link1=url('admin/order/view/'.$id_order);
             $link2=url('admin/order/delete/'.$id_order);
            echo "<tr>
        			<td><center>$id_order</center></td>
        			<td>$fullname</td>
        			<td>$tel</td>
        			<td>$total</td>
                    <td><a href='$link1' target='_blank'>แสดง</a></td>
        			<td><a href='$link2'onclick=\"return confirm('ต้องการลบสินค้านี้หรือไม่')\">ลบ</a></td>
        		</tr>";
        }
        ?>
    	<table>
        @endsection

        @section('footer')

        @endsection
