<?php
   	include 'connection.php';
       if(isset($_POST['submit-signin']))
   	{
	   	$username =$_POST['username'];
	   	$password = $_POST['password'];

           $sql_Login_Admin = "SELECT * from admin_signin where username = '$username' && password = '$password'";
           
           $Admin_Query = mysqli_query($conn, $sql_Login_Admin);

           $Admin_Query_Count = mysqli_num_rows($Admin_Query);
           if($Admin_Query_Count == 1 )
			{
				echo '<script language="javascript"> 
				alert("Logged in successfully.");
				window.location.href="../dashboard.html"; 
				</script>';
				 echo "siggned in admin";
			}
			else
			{
				echo '<script language="javascript"> 
		    	alert("Sorry.. please try again."); 
				window.location.href="../login_form.php"; </script>';				
				 echo "errors";
            }
    }   
?>