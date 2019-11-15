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
    <h3 class="heading">KSRTC DATABASE</h3>
    <div class="col col-md-12">
    <form method="POST">
    <table class="table">
    <tr>
    <td>
    Name
    </td>
    <td>
    <input type="text" class="form-control"  name="name">
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
    Phone Number
    </td>
    <td>
    <input type="number" class="form-control" name="phone">
    </td>
    </tr>
    <tr>
    <td>Email</td>
    <td>
    <input type="text" class="form-control" name="email">
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
    Employee Id
    </td>
    <td>
    <input type="text" class="form-control" name="empid">
    </td>
    </tr>
    <tr>
    <td>
    Depo Name
    </td>
    <td>
    <input type="text" class="form-control" name="deponame">
    </td>
    </tr>
    <tr>
    <td>
    Designation
    </td>
    <td>
    <input type="text" class="form-control" name="designation">
    </td>
    </tr>
    <tr>
    <td>
    Salary Scale
    </td>
    <td>
    <input type="text" class="form-control" name="salary-scale">
    </td>
    </tr>
    <tr>
    <td>
    <button type="reset" class="btn btn-success" name="reset">RESET</button>

    </td>
    <td>
    <button type="submit" class="btn btn-success" name="submit"> SUBMIT</button>
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
$


}

?>