<?php
   	include 'connection.php';

   	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
   	$plot_details = $_POST['plot_details'];
   	$title = $_POST['title'];
   	$description =$_POST['description'];
   	
   	if(isset($_POST['submit']))
   	{
	   	$destination_path = getcwd().DIRECTORY_SEPARATOR;
		$target_path = $destination_path . "uploads-complaints/" . basename( $_FILES["supporting_documents"]["name"]);
		$file_name = basename( $_FILES["supporting_documents"]["name"]);

	   	$sql = "INSERT INTO complaints (name, contact, email, plot_details, title, description, document_name) 
										VALUES ('$name', '$contact', '$email', '$plot_details', '$title','$description', '$file_name')";

		if((mysqli_query($conn, $sql)) && (move_uploaded_file($_FILES['supporting_documents']['tmp_name'], $target_path)))
		{
			echo '<script language="javascript"> 
			alert("Records inserted successfully.");
			window.location.href="../dashboard.html"; </script>';
		}
		else
		{
			echo '<script language="javascript"> 
	    	alert("Sorry.. please try again."); 
			window.location.href="../member_request.html"; </script>';
		}
   	}
?>



	