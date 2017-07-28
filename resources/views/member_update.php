<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
<body>
    <h1> Member : Update </h1>

    <?php
//      foreach($result as $m){
//        $id =  $m->id;
//        $fname =$m->fname;
//        $lname =$m->lname;
//        $address=$m->address;

//        echo "$id,$fname,$lname,$address </br>";

$id =  $result->id;
$fname =$result->fname;
$lname =$result->lname;
$address=$result->address;

echo "$id,$fname,$lname,$address </br>";

//      }
    ?>

    <form action="../update2" method="post">
      First name :<input type="text" name ="fname" value="<?=$fname?>"> <br/>
       Last name :<input type="text" name ="lname" value="<?=$lname?>"> <br/>
       Address : <br/>
       <textarea name="address"><?=$address?></textarea> <br/><br/>

       <input type="submit">
       <input type="reset">

       <input type="hidden" name="id" value="<?=$id?>">
       <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>
    </form>



</body>
