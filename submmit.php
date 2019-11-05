
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
*{
	margin-left: 8%;;
}
		.contains{
			width: 75%;


			
}
table,tr,td {
  border: 1px solid black;
  border-collapse: collapse;
  width: 50%;
 
  

}
td{
	padding: 16px;

	
}
p{
	padding: 20px;
	margin-left: 20%;
	

	

}


	</style>
</head>
<body>

</body>
</html>
<div class="contians">
	<p><b>Details of the patient</b></p>
	<table>
		<tr>
			<th>
				<strong>Name of patient:</strong>
			</th>
			<td>
				<?php echo $_GET['name'];?>
			</td>
		</tr>
		<tr>
			<th>
				<strong>Address:</strong>
			</th>
			<td>
				<?php echo $_GET['address'];?>
			</td>
		</tr>
		<tr>
			<th>
				<strong>Age:</strong>
			</th>
				<td>
					<?php echo $_GET['age'];?>
				</td>
		</tr>
		<tr>
			<th>
				<strong>Date of birth:</strong>
			</th>
			<td>
				<?php echo $_GET['dob'];?>
			</td>
		</tr>
		<tr>
			<th>
				<strong>Gender:</strong>
			</th>
			<td>
				<?php echo $_GET['gender'];?>
			</td>
		</tr>
		<tr>
			<th>
				<strong>Prefered Time:</strong>
			</th>
			<td>
				<?php echo $_GET['time'];?>
			</td>
		</tr>
		<tr>
			<th>
				<strong>Date:</strong>
			</th>
			<td>
				<?php echo $_GET['date'];?>
			</td>
		</tr>
		<tr>
			<th>
				<strong>Disease sector:</strong>
			</th>
			<td>
				<?php echo $_GET['diseasename'];?>
			</td>
		</tr>
	</table>
	<p>Thanks for applying your appointment.</p>
	<a href="hospital.html" style="border: 1px solid black ; background:green; text-decoration: none; padding: 8px; color: white; margin-left: 28%;">GO BACK</a>
      
</div>