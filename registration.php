<!DOCTYPE html>
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
   <form method="POST">
   <table class="table">
   <h3 class="heading">Registration Form</h3>
   <tr>
   <td>
   Name
   </td>
   <td>
   <input type="text" class="form-control" name="name">
   </td>
   </tr>
   <tr>
   <td>
   Address
   </td>
   <td>
   
   <textarea cols="21" rows="5" class="form-control" name="address"></textarea>
   </td>
   </tr>
<tr>
<td>
  Header  
</td>
<td>
<input type="radio" name="gender" value="male">
male
<input type="radio"  name="gender" value="female">
female
</td>
</tr>
<tr>
<td>
District
</td>
<td>
<select name="district" id="" class="form-control">

<option value="Trivandrum"> Trivandrum</option>
<option value="Kollam">Kollam</option>
<option value="Alappuzha">Alappuzha</option>
<option value="pathanamthitta">pathanamthitta</option>
<option value="kottayam">kottayam</option>
<option value="Idukki">Idukki</option>
</select>

</td>
</tr>
<tr>
<td>
Mobile
</td>
<td>
<input type="number" class="form-control" name="mobile">
</td>
</tr>
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
Conform Password
</td>
<td>
<input type="password" class="form-control" name="conformpassword">
</td>
</tr>
<tr>
<td>
<button type="clear" class="btn btn-success" name="reset">Reset</button>
</td>
<td>
<button type="submit" class="btn btn-success" name="register">Register</button>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>

<?php
if(isset($_POST['resister']))

{
$name=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$district=$_POST['district'];
$mobile=$_POST['mobile'];
$username=$_POST['username'];
$password=$_POST['password'];
$conform_password=$_POST['conformpassword'];

}

?>
