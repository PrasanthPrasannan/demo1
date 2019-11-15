"<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container border1">
    <div class="col col-md-12">
    <form method="POST">
    <table class="table">
    <h1 style="text-align:center";>LOGIN</h1>
    <tr>
    <td>
    Username
    </td>
    <td>
    <input type="text" class="form-control" name="username">
    </td>
    </tr>
    <tr>
    <td>
    Password
    </td>
    <td>
    <input type="password" class="form-control" name="password">
    </td>
    </tr>
    <tr>
    <td>
    </td>
    <td>
    <button type="submit" class="btn btn-success" name="login">Login</button>
    </td>
    </tr>
    </table>
    </form>

    </div>
    </div>
</body>
</html>
<?php

if(isset($_POST['login']))

{

$username=$_POST['username'];
$password=$_POST['password'];


$servername="localhost";
$Dbusername="root";
$Dbpassword="";
$Dbname="login";

}

?>