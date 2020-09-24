<?php 
	session_start();
	if (isset($_SESSION["id"])) 
  	{}
	else
	{
	    echo '<script type="text/javascript">window.location.href="Welcome.php";</script>';
	}
	
	$App_ID="";
	$App_ID=$_SESSION["App_ID"];

	if (isset(($_POST['OK']))) 
	{
		header("Location: Patient_Page.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="css/sm.css">
   <link rel="stylesheet" href="css/All_registration.css">
</head>
<body>
	<div style="width:100%">
		<!-- Header-->
		<div>
			<?php include 'Header.php' ?>			
		</div>
		<!-- Header2 -->
		<div>
			<?php include 'Header2.php' ?>			
		</div>
	</div>
		<!-------------------------------------------------------------------------------------------------->
	<div style="width:100%;">
		<div>
			<div class="Normal_welcome_ref">
				<?php

					if ($App_ID=="0") 
					{
						include 'Patient_Reference.php';
					}

					else
					{
						include 'Patient_Reference2.php';
					}

				?>
			</div>
			<!-- -------------------------------------------------------->
			<div  style="padding-left: 60px;height: 200px;" align="center">
				<p style="margin-top: 0px;padding-top: 100px;font-size: 130%">Successfully Paid Bill</p>
				
			</div>
		

			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
				<div align="center" style="padding-bottom: 100px">
					<input type="submit" name = "OK" value="Ok">
				</div>
			</form>
	
		</div>
	</div>	
		
		<!-------------------------------------------------------------------------------------------------->
		<!-- Footer-->
	<div style="width:100%;margin-top: 90px;">
		<div style="background-color: #4CAF50">
			<?php include 'Footer.php' ?>	
		</div>
	</div>
</body>
</html>

