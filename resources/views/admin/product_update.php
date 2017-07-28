<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> ผู้ดูแลระบบ </title>
    </head>
    <body>
        <?=$menu?>
        <?php
            foreach ($result as $row) {
                $id_prd=$row->id_prd;
                $name_prd=$row->name_prd;
                $detail_prd=$row->detail_prd;
                $price_prd=$row->price_prd;
                $photo_prd=$row->photo_prd;
                $ref_id_type=$row->ref_id_type;
            }
        ?>
        <form action="<?=url('admin/product/update2')?>" method="post"
            enctype="multipart/form-data">
          <P><B>แก้ไขสินค้า</B></P>
          <table width="400" border="0" cellspacing="1" cellpadding="0">
            <tr>
              <td width="101">ชื่อสินค้า</td>
              <td><input type="text" name="name_prd" size="40"
                   value="<?=$name_prd?>">* </td>
            </tr>
            <tr>
              <td>ประเภทสินค้า</td>
              <td>
            	  <select name="ref_id_type">
            	  <?php
                    foreach ($result2 as $row2) {
                        $id_type=$row2->id_type;
                        $name_type=$row2->name_type;

                        if($ref_id_type==$id_type) {
                            echo "<option value='$id_type' selected>$name_type</option>";
                        } else {
                            echo "<option value='$id_type'>$name_type</option>";
                        }
                    }
            	  ?>
                </select> *
             </td>
          </tr>
            <tr>
              <td>รายละเอียด</td>
              <td><textarea name="detail_prd" cols="40" rows="4"><?=$detail_prd?></textarea> * </td>
          </tr>
            <tr>
              <td>ราคา</td>
              <td><input type="text" name="price_prd" size="10" value="<?=$price_prd?>"> บาท *</td>
            </tr>
            <tr>
              <td>รูปภาพ</td>
              <td>
                  <?php
                    $url=url('uploads/'.$photo_prd);;
                    echo "<a href='$url' target='_blank'> คลิก </a><br/>";
                  ?>
                  <input  type="file" name="photo_prd">
              </td>
            </tr>
              <td>&nbsp;</td>
              <td>
                <input type="hidden" name="id_prd" value="<?=$id_prd?>">
                <input type="hidden" name="photo_prd2" value="<?=$photo_prd?>">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input name="submit" type="submit">
                <input name="RESET" type="reset" >
              </td>
            </tr>
        </table>
      </form>
    </body>
</html>
