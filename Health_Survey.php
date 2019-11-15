<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container border">
<div class="row">
<div class="col col-md-12">
<h3 class="heading">Health Survey</h3>
<form method="POST">
<table class="table">
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
Gender
</td>
<td>
<input type="radio" name="gender" value="male">
Male
<input type="radio" name="gender" value="female">
Female
</td>
</tr>
<tr>
<td>
City
</td>
<td>
<input type="text" class="form-control" name="city">
</td>
</tr>
<tr>
<td>
Deceses
</td>
<td>
<select name="deceses" class="form-control">
<option value="Fever">Fever</option>
<option value="Asma">Asma</option>
<option value="Headache">Headache</option>
</td>
</tr>
<tr>
<td>
Hospital
</td>
<td>
<input type="text" class="form-control" class="hospital">
</td>
</tr>
<tr>
<td>
Doctor Name
</td>
<td>
<input type="text" class="form-control" name="doctorname">
</td>
</tr>
<tr>
<td>
<button type="clear" class="btn btn-success">CLEAR</button>
</td>
<td>
<button type="submit" class="btn btn-success" class="submit">SUBMIT</button>

</td>
</tr>
</table>
</form>
</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){

$name=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$deceses=$_POST['deceses'];
$hospital=$_POST['hospital'];
$doctorname=$_POST['doctorname'];



}
?>