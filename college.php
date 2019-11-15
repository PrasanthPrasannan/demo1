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
<div class="col-md-12">
<h1 style="font-size:30px;text-align:center;">College Search</h1>
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
Rollno
</td>
<td>
<input type="text" class="form-control" name="rollno">	
</td>
</tr>

<tr>
<td>
Admno
</td>
<td>
<input type="text" class="form-control" name="admno">	
</td>
</tr>

<tr>
<td>
College
</td>
<td>
<input type="text" class="form-control" name="college">	
</td>
</tr>

<tr>
<td>
</td>
<td>
<button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
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
$rollno=$_POST['rolno'];
$admno=$_POST['admno'];
$college=$_POST['college'];


$ServeraName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="";

$connection=new mysqli($ServeraName,$DbUsername,$DbPassword,$DbName);

$sql="";

$result=$connection->query($sql);

if($result===TRUE){

echo "<script> alert('Data Inserted')</script>";

}
else {
    echo "<script>alert('Data insertion Failed')</script>";
}

}

?>



