<?php
   	include 'connection.php';

   	if(isset($_POST['contactButton']))
   	{
	   	$name = $_POST['name'];
	   	$email = $_POST['email'];
	   	$contact = $_POST['contact'];
	   	$message = $_POST['message'];   		
	   	
		$sql = "INSERT INTO contact_queries (name, email, contact, query) VALUES ('$name', '$email', '$contact', '$message')";
		
		if(mysqli_query($conn, $sql))
		{
			echo '<script language="javascript"> 
			alert("Records inserted successfully.");
			window.location.href="../index.html"; 
			</script>';
		} 
		else
		{
			echo '<script language="javascript"> 
	    	alert("Sorry.. please try again."); 
			window.location.href="../member_request.html"; </script>';
		}
	}
	
	
?>