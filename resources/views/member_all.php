<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
<body>
    <h1> Member : All </h1>
    <a href="insert">Insert Member</A>



    </P>
    <?php

foreach($result as $m){
  $id =  $m->id;
  $username = $m->username;
  $password = $m->password;
  $fname = $m->fname;
  $lname = $m->lname;
  $email = $m->email;
  $phone = $m->phone;
  $sex = $m->sex;
  $birthday= $m->birthday;
  $created_at= $m->created_at;
  $updated_at= $m->updated_at;

  echo "<a href='show/$id'> View </a> |";
  echo "<a href='update/$id'> Update </a> |";
//echo "<a href='delete/$id'> Delete </a> |";

  echo "<a href=\"delete/$id\"onclick=\"return confirm('Do you want to delete that?')\">Delete</a>";
  echo "  $id,$username,$password,$fname,$lname,$email,$phone,$sex,$birthday,$created_at,$updated_at </br>";
}
    ?>

</body>
