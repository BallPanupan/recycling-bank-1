<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> ร้านค้าออนไลน์ </title>
    </head>
    <body>
        <?=$menu?>
        <table width="770" border="0">
          <tr>
              <td width="174" height="200" valign="top" bgcolor="#EAEAEA">
                  <?=$typeList?>
              </td>
            <td width="580" valign="top">
              <table width="100%"  border="0" cellspacing="4">
            <?php
                foreach($result as $row) {
            		$id_prd=$row->id_prd;
            		$name_prd=$row->name_prd;
            		$detail_prd=$row->detail_prd;
            		$price_prd=$row->price_prd;
            		$photo_prd=$row->photo_prd;

                    if ($photo_prd=="") {
                        $link=url("uploads/temp.jpg");
                    } else {
                        $link=url("uploads/$photo_prd");
                    }

                    $link2=url("basket/insert/$id_prd");
                    echo "<tr>
    						<td width='20%' valign='top'>
    							<img width='100' src='$link'>
    						</td>
    						<td width='80%' valign='top'>
    							<b>รหัสสินค้า :</b> $id_prd  <br>
    							<b>ชื่อสินค้า : </b>$name_prd <br>
    							<b>ราคา :</b> $price_prd บาท <br><br>
                                $detail_prd <br><br>
    							[ <a href='$link2'>หยิบใส่ตระกร้าสินค้า </a>]  <br>
    						</td>
            			</tr>";
                }
            ?>
              </table>
        	</td>
        </tr>
      </table>
    </body>
</html>
