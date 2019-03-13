<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/progress-wizard.min.css" rel="stylesheet">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>ZTP Monitor</h2></center>
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
		<form action="index.php" method="post">
		
			<div class="inner_container">
				<label><b>Router Serial Number</b></label>
				<input type="text" placeholder="Enter IP address" name="ipAddress" required>
				<button class="login_button" name="submit" type="submit">Submit</button>
			</div>
		</form>

		<div><br></div>
		<div><br></div>
		<div class="inner_container">
		<ul class="progress-indicator" id="Proglist">
            <!--<li class="completed">
                <span class="bubble"></span>
                Step 1. <br><small>(complete)</small>
            </li>
            <li class="completed">
                <span class="bubble"></span>
                Step 2. <br><small>(complete)</small>
            </li>
            <li class="active">
                <span class="bubble"></span>
                Step 3. <br><small>(active)</small>
            </li>
            <li>
                <span class="bubble"></span>
                Step 4.
            </li>
            <li>
                <span class="bubble"></span>
                Step 5.
            </li>-->
        </ul>
		</div>

		<?php
			if(isset($_POST['submit']))
			{
				@$ipAddress=$_POST['ipAddress'];
				$query = "select * from login where id='$ipAddress'";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					$_SESSION['ipAddress']=$row['id'];
					$_SESSION['pos'] = $row['pos'];
					$_SESSION['skip'] = $row['skip'];

					
					header( "Location: homepage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such IP address exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>
		
	</div>
</body>
</html>