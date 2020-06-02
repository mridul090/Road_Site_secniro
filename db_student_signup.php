<?php

include("studenthome.php");

try{
    $conn=new PDO("mysql:host=localhost;dbname=online_teaching",'root','');
    echo "<script>console.log('connection successful')</script>";
    session_start();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
}
catch(PDOException $e){
    echo "<script>console.log('connection error')</script>";
}
           
?>

<!DOCTYPE html>
<html>
<head>
<title>Student database</title>
</head>
<body>

<table align ="center" border="1px">
	<tr>
		<th colspan="6"><h2>Student Registration</h2></th>
	</tr>

	<t>
		<th>student_id</th>
		<th>first_name</th>
		<th>last_name</th>
		<th>email</th>
		<th>phone_number</th>
		<th>password</th>
	</t>


	<?php
	while($row = $result->fetch_assoc()){
    ?>
		<tr> 
		  <td><?php echo $row['student_id']; ?></td>
		  <td><?php echo $row['first_name']; ?></td>
		  <td><?php echo $row['last_name']; ?></td>
		  <td><?php echo $row['email']; ?></td>
		  <td><?php echo $row['phone_number']; ?></td>
		  <td><?php echo $row['password']; ?></td>

		</tr>
	<?php

    }

    $conn-> close();

	?>
</table>

</body>
</html>

<?php
include("footer.php");
?>