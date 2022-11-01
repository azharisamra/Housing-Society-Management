<?php
   	include 'connection.php';
    echo "included file also";
   	$name = $_POST['name'];
   	$email = $_POST['email'];
   	$contact = $_POST['contact'];
   	$department = $_POST['department'];
   	$message = $_POST['message'];

   	$sql = "INSERT INTO member_request (name, email, contact, department, message) VALUES ('$name', '$email', '$contact', '$department', '$message')";
	
	if(mysqli_query($conn, $sql))
	{
		echo '<script language="javascript"> 
		alert("Records inserted successfully.");
		window.location.href="../index.html"; 
		</script>';

		 echo "Records inserted successfully.";
	} 
	else
	{
     	echo '<script language="javascript"> 
     	alert("' . mysqli_error($conn) . '"); 
		 window.location.href="../member_request.html"; </script>';
		echo '<script language="javascript"> 
    	alert("Sorry.. please try again."); 
		window.location.href="../member_request.html"; </script>';
	}
?>