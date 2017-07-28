<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
<body>
    <h1> Member : Insert </h1>
<form action="insert2" method="post">
  First name :<input type="text" name ="fname"> <br/>
   Last name :<input type="text" name ="lname"> <br/>

   Address : <br/>
   <textarea name="address"></textarea> <br/><br/>

   <input type="submit">
   <input type="reset">

   <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>
</form>

<div class="links"><p>
    <a href="all">Member All</a>
    <a href="insert">Member insert</a>
    <a href="delete">delete Member/{id}</a>
</div>

</body>
