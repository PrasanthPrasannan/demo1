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
<h3 class="heading">BUS DATABASE</h3>
<form method="POST">
<table class="table">
<tr>
<td>
Bus Number
</td>
<td>
<input type="text" class="form-control" name="busnumber">
</td>
</tr>
<tr>
<td>
Bus Name
</td>
<td>
<input type="text" class="form-control" name="busname">
</td>
</tr>
<tr>
<td>
Route
</td>
<td>
<select name="route" class="form-control">
<option value="">Select Route</option>
<option value="KOLLAM-TRIVANDRUM">KOLLAM-TRIVANDRUM</option>
<option value="KOTTAYAM-PALA">KOTTAYAM-PALA</option>
<option value="KOLLAM-KOTTARAKARA">KOLLAM-KOTTARAKARA</option>
<option value="PANDALAM-KOLLAM">PANDALAM-KOLLAM</option>
</select>
</td>
</tr>
<tr>
<td>
Driver Name
</td>
<td>
<input type="text" class="form-control" name="drivername">
</td>
<tr>
<td>
Conductor Name
</td>
<td>
<input type="text" class="form-control" name="conductorname">
</td>
</tr>
<tr>
<td></td>
<td>
<button type="submit" class="btn btn-success" name="success">SUBMIT</button>
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
if(isset($_POST['success'])){

$busnumber=$_POST['busnumber'];
$busname=$_POST['busname'];
$route=$_POST['route'];
$drivername=$_POST['drivername'];
$conductorname=$_POST['conductorname'];


$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="study";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);


$sql="INSERT INTO `bus_database`(`busnumber`, `busname`, `route`, `drivername`, `conductorname`) VALUES ($busnumber, '$busname', '$route', '$drivername','$conductorname')";

$result=$connection->query($sql);

if($result===TRUE){

    echo "<script>alert('Data Inserted')</script>";

}
else{
    echo "<script>alert('Data Insertion Failed')</script>";
}


}

?>