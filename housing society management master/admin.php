<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style1.css" >
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <a href="index.html">
                <img src="img/logo.png" alt="">
                </a>
            </div>

            <span class="logo_name">DN Fairytale</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="dashboard.html">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="admin.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Complaints</span>
                </a></li>
                <li><a href="committee.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Committee</span>
                </a></li>
                <li><a href="enquiry.php">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Enquiries</span>
                </a></li>
                <li><a href="meeting.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Meeting</span>
                </a></li>
                <li><a href="notice.php">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Notice</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="login_form.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="img/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>
			</div>
		</div>
	</section>
<?php
   	include 'connection.php';
   	if(isset($_POST['complaints']))
   	{
		$sql = "SELECT * FROM complaints";

		$result = mysqli_query($conn,$sql);

		echo "<table border='1px solid black'>";
		echo "<tr>
		<th>Name</th>
		<th>Contact</th>
		<th>Email</th>
		<th>Plot_details</th>
		<th>Title</th>
		<th>Description</th>
		<th>Document_name</th>
		<th>Document</th>
		</tr>";

		while($row = mysqli_fetch_array($result)) 
		{
		    $name = $row['name'];
		    $contact = $row['contact'];
		    $email = $row['email'];
		    $plot_details = $row['plot_details'];
		    $title = $row['title'];
		    $description = $row['description'];
		    $document_name = $row['document_name'];

		    echo "<tr>
		    <td style='width: 200px;'>".$name."</td>
		    <td style='width: 200px;'>".$contact."</td>
		    <td style='width: 200px;'>".$email."</td>
		    <td style='width: 200px;'>".$plot_details."</td>
		    <td style='width: 200px;'>".$title."</td>
		    <td style='width: 200px;'>".$description."</td>
		    <td style='width: 200px;'>".$document_name."</td>
		    <td style='width: 200px;'> <a href='uploads-complaints/".$document_name."'>".$document_name."</a></td>
		    </tr>";
		} 
	    echo "</table>";
	}
?>
</body>
</html>