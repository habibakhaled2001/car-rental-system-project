<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="search_cardb.css">
  <link rel="stylesheet" href="styles/all.min.css">
  <title>Document</title>
</head>
<body>
<center>
<?php
$servername_sql = "localhost";
$username_sql = "root";
$password_sql = "";
$dbname_Sql = "car_rent";
$mysqli = mysqli_connect($servername_sql, $username_sql, $password_sql, $dbname_Sql);
?>
 <div class="heading">
    Results of searching
</div>
<section class="container">

<table style="width: 70%;"border='1'>
<tr style="text-align: center;">
<td><strong>Customer id</td>
    <td><strong>Fname</td>
    <td><strong>Lname</td>
    <td><strong>password</td>
    <td><strong>email</td>
    <td><strong>Phone number</td>

</tr>

<?php
$customer_id=$_POST['customer_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone_no=$_POST['phone_no'];
$flag=0;
if($customer_id=="" && $fname=="" && $lname=="" && $password=="" && $email=="" && $phone_no=="" )
{
header('Location:search_customer.php');
}
else
{
if ($customer_id!="")
{
	$result = mysqli_query($mysqli," select * from `customer` where `customer_id`='$customer_id'");
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
    echo "<td>" . $row['customer_id'] . "</td>";
    echo "<td>" . $row['fnamee'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['passwordd'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "</tr>";
	$flag=1;
}
}
if ($fname!="")
{
	$result = mysqli_query($mysqli," select * from `customer` where `fnamee`='$fname'");
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
    echo "<td>" . $row['customer_id'] . "</td>";
    echo "<td>" . $row['fnamee'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['passwordd'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "</tr>";
	$flag=1;
}
}
if ($lname!="")
{
$result = mysqli_query($mysqli," select * from `customer` where `lname`='$lname'");
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['customer_id'] . "</td>";
    echo "<td>" . $row['fnamee'] . "</td>";
    echo "<t2d>" . $row['lname'] . "</td>";
    echo "<td>" . $row['passwordd'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "</tr>";
	$flag=1;
}
}
if ($password!="")
{
$result = mysqli_query($mysqli," select * from `customer` where `passwordd`='$password'");
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
    echo "<td>" . $row['customer_id'] . "</td>";
    echo "<td>" . $row['fnamee'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['passwordd'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "</tr>";
	$flag=1;
}
}
if ($email!="")
{
$result = mysqli_query($mysqli," select * from `customer` where `email`='$email'");
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
    echo "<td>" . $row['customer_id'] . "</td>";
    echo "<td>" . $row['fnamee'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['passwordd'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "</tr>";
	$flag=1;
}
}
if ($phone_no!="")
{
$result = mysqli_query($mysqli,"  select * from `customer` where `phone_number`='$phone_no'");
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
    echo "<td>" . $row['customer_id'] . "</td>";
    echo "<td>" . $row['fnamee'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['passwordd'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "</tr>";
	$flag=1;
}
}
}
?>
</table>
</section>

<?php
if($flag==0)
{
echo '<script>alert("0 results found")</script>';
}
?>
             <br>
			  <form action='search_customer.php' method='post'>
			  <input type='submit' value='back' class="back">
			  </form>"
<?php
$mysqli->close();
?> 
<img src="res.webp" width="380px" class="image">

</center>
</body>
</html>