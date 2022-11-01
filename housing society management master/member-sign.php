<?php
   	include 'connection.php';
	
	if(isset($_POST['submit-signin']))
   	{
	   	$username =$_POST['username'];
	   	$password = $_POST['password'];
	   	
		$sql_Login_Member = "SELECT * from member_signin where username = '$username' && password = '$password'";
		

		$Member_Query = mysqli_query($conn, $sql_Login_Member);
		

		$Member_Query_Count = mysqli_num_rows($Member_Query);
		

		if($Member_Query_Count == 1 )
		{
			echo '<script language="javascript"> 
			alert("Logged in successfully.");
			window.location.href="../member_siggned_in.html"; 
			</script>';
			 echo "siggned in member";
		} 
		else
		{
			echo '<script language="javascript"> 
	    	alert("Sorry.. please try again."); 
			window.location.href="../contact-login.html"; </script>';				
			echo "errors";
		}
	}
?>



