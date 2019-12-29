<html>
<head> <title>Sign UP </title> 
<link rel="stylesheet" href="css\bootstrap.min.css">
<style>
#tb{
	width:50%;
}
#th{
	text-align:center;
}


</style>

</head>
<center>
<body>
<?php 
include 'connection.php';
	
	
$uname=$_REQUEST["txtname"];
$pass=$_REQUEST["password"];
$email=$_REQUEST["txtemail"];
$mobile=$_REQUEST["txtnumber"];
$date=$_REQUEST["DOB"];
$country=$_REQUEST["selcountry"];


$gender=$_REQUEST["radgen"];
if($gender=="m")
	$gender="Male";
elseif($gender=="f")
	$gender="Female";
elseif($gender=="o")
	$gender="Transgender";
else
	$gender="No Gender Selected";
	
$area=$_REQUEST["addrearea"];
$check=$_REQUEST["check"];

if($check=="on")
	$check="Checked";
else
	$check="Not Checked";

$sql="Insert INTO sign_up (username,password,email,mobile,dob,gender,country,address) values('$uname','$pass','$email',$mobile,'$date','$gender','$country','$area')";



if(!mysqli_query($con,$sql))
{
	   echo "Error: " . $sql . "<br>" . mysqli_error($con);
	
 }

?>

<div class="container">
<form action="sub.php">
	<table  class="table table-striped" id="tb"  >
	<th colspan="2" id="th"><font color="Blue";>Registeration Form</font></th>
	<tr>
	<td>Username:</td><td><?php echo $uname ; ?> </td>
	</tr>
	<tr>
	<td>Password:</td><td><?php echo $pass ; ?> </td>
	</tr>
	
	<tr>
	<td>Email:</td><td><?php echo $email ; ?> </td>
	</tr>
	
	<tr>
	<td>Mobile No:</td><td><?php echo $mobile ; ?> </td>
	</tr>
	
	
	
	<tr>
	<td>Date of Birth:</td><td><?php echo $date ; ?> </td>
	</tr>
	<tr>
	<td>Gender:</td>
	<td nowrap><?php echo $gender ; ?> </td>
	</tr>
	<tr>
		<td>Country:  </td><td>	<?php echo $country ; ?> </td>
		</tr>
	
	
	
	<tr>
	<td>Address:</td><td>	<?php echo $area ; ?> </td>
	</tr>
	<tr>
	<td nowrap>
	<label>I agree Terms & condition</label>
	</td>
	<td>
		<?php echo $check ; ?> 
	</td>
	</tr>
	
	<tr>
	<td >
	<input type="submit" value="Sign Up" class="btn btn-info" ></td>
	<td >
	<button type="button" value="back" onclick="window.history.back()" class="btn btn-info">Back</button></td>
	</tr>
	</table>
	</form>
	</div>



</body>
</center>
<?php
mysqli_close($con);
?>
</html>