<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body>
          <h1>::Login::</h1>
          <form action="login2" method="post">
            username : <input type="text" name ="username"> <br/>
            password : <input type="password" name="password"> <br>
            <br/>

            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>
            <input type="submit">
            <input type="reset">

            

    </body>
</html>
