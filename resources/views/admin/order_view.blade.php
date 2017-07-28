@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')


@endsection

@section('content')

        <?php
            foreach ($result as $row) {
                $id_order=$row->id_order;
                $fullname=$row->fullname;
                $tel=$row->tel;
                $address=$row->address;

                $total=$row->total;
            }
         ?>
        <table width="400" border="0" CELLSPACING="1" CELLPADDING="0">
        	<tr>
        		<td width="101">รหัส : </td>
        		<td><?=$id_order?></td>
        	</tr>
        	<tr>
        		<td width="101">ชื่อ สกุล : </td>
        		<td><?=$fullname?></td>
        	</tr>  
        	<tr>
        		<td>เบอร์โทรศัพท์ : </td>
        		<td><?=$tel?></td>
        	</tr>
        	<tr>
        		<td>เวลาเข้ารับสินค้า : </td>
        		<td><?=$address?></td>
        	</tr>

        </table><BR>
        <table width="600"  border="1">
        	<tr bgcolor="#E8E8E8">
        		<td width="8%"><div align="center"><br>รหัสสินค้า</br></div></td>
        		<td width="60%"><div align="center"><br>ชื่อสินค้า</br></div></td>
        		<td width="10%"><div align="center"><br>จำนวน</br></div></td>
        		<td width="10%"><div align="center"><br>ราคา</br></div></td>
        		<td width="12%"><div align="center"><br>รวม</br></div></td>
        	</tr>
        	<?php
            foreach ($result2 as $row) {
                $id_prd=$row->id_prd;
                $name_prd=$row->name_prd;
                $qty=$row->qty;
                $price=$row->price;

                $unit=$qty * $price;
        			echo "
        				<tr>
        					<td>$id_prd</td>
        					<td>&nbsp;$name_prd</td>
        					<td><center>$qty</center></td>
        					<td><center>$price</center></td>
        					<td><center>$unit</center></td>
        				 </tr>";
        		}
        	?>
        </table><BR>
        <?php echo "จำนวนเงินทั้งหมด $total บาท"; ?><BR>
          @endsection

          @section('footer')

          @endsection
