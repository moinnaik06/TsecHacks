<?php
session_start();
$_SESSION['email'] = 'aditiraut2882@gmail.com';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>BookWorm</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css"  rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="js/ie-emulation-modes-warning.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			* {box-sizing: border-box;}

		body { 
			  margin: 0;
			  font-family: Arial, Helvetica, sans-serif;
			}

			.header {
			  overflow: hidden;
			  background-color: #f1f1f1;
			  padding: 20px 10px;
			}

			.header a {
			  float: left;
			  color: black;
			  text-align: center;
			  padding: 12px;
			  text-decoration: none;
			  font-size: 18px; 
			  line-height: 25px;
			  border-radius: 4px;
			}

			.header a.logo {
			  font-size: 25px;
			}

			.header a:hover {
			  background-color: #ddd;
			  color: black;
			}

			.header a.active {
			  background-color: dodgerblue;
			  color: white;
			}

			.header-right {
			  float: right;
			}

			@media screen and (max-width: 1000px) {
			  .header a {
			    float: none;
			    display: block;
			    text-align: left;
			  }
			  
			  .header-right {
			    float: none;
			  }
			}

			.sidenav {
			  width: 330px;
			  position: relative;
			  z-index: 1;
			  top: 20px;
			  left: 10px;
			  background: #eee;
			  overflow-x: hidden;
			  padding: 8px 0;
			}

			.sidenav a {
			  padding: 6px 8px 6px 16px;
			  text-decoration: none;
			  font-size: 25px;
			  color: #2196F3;
			  display: block;
			}

			.sidenav a:hover {
			  color: #064579;
			}

			.main {
			  margin-left: 140px; /* Same width as the sidebar + left position in px */
			  font-size: 28px; /* Increased text to enable scrolling */
			  padding: 0px 10px;
			}

			@media screen and (max-height: 1000px) {
			  .sidenav {padding-top: 15px;}
			  .sidenav a {font-size: 18px;}
			}
		</style>
	</head>
	<body id="page-top">

<div class="header">
  <a href="#" class="logo"><img src="logo.png" height="40"></a>
  <div class="header-right">
    <a href="books.php">New Books</a>
    <a href="library.php">Library</a>
    <a href="profile.php">Profile</a>
    <a>
    <ul>
    <div class="row">
    	<div class="col-md-6">
    	<li><span>
    		<?php 
    		$email = $_SESSION['email']; 
    		echo $email; 
    		?>
    	</span></li>
    	</div>
    </div>
    </ul>
	</a>
  </div>
	</a>
</div>
<div class="row">
	<div class="col-md-2">
		<div class="sidenav">
		  <?php		
		  include 'includes/dbcon.php';
		  $email = $_SESSION['email'];
		  $sql = "SELECT * FROM register WHERE email = '$email'";
		  $result = mysqli_query($conn, $sql);
		  $row = mysqli_fetch_array($result);
		  $first_name = $row['first_name'];
		  $last_name = $row['last_name'];
		  $user_id = $row['user_id'];
		  $phone_no = $row['phone_no'];
  		  echo "<a href='#'>Name : ".$first_name."</a>";
  		  echo "<a href='#'>Last Name : ".$last_name."</a>";
		  echo "<a href='#'>User ID : ".$user_id."</a>";
		  echo "<a href='#'>Phone No. : ".$phone_no."</a>";
		  ?>
		</div>
	</div>
	<div class="col-md-10">
		<div class="main" align="center">
		  <h2>Want to Personalise yourself ?<br>Answer the questions below..</h2>
		  <br><br>
		  <form action="personalise.php" method=POST>
		  <div class="row">
		  	<div class="col-md-6">
		  		<h3>Your favourite colour ?</h3>
		  		<br>
		  		<input type="text" name="colour" placeholder="red*" required>
		  		<br><br><br>
		  	</div>	
		  	<div class="col-md-6">	
		  		<h3>Your favourite cuisine ?</h3>
		  		<br>
		  		<input type="text" name="food" placeholder="indian*" required>
		  		<br><br><br>
		  	</div>	
		  </div>

		  <div class="row">
		  	<div class="col-md-12">
		  		<h3>Your three favourite friends ?</h3>
		  		<br>
		  	</div>
		  </div>
		  <div class="row">
		  	<div class="col-md-4">
		  		<input type="text" name="friend1" placeholder="vanshika*" required>
		  	</div>
		  	<div class="col-md-4">
		  		<input type="text" name="friend2" placeholder="aditi*" required>
		  	</div>
		  	<div class="col-md-4">
		  		<input type="text" name="friend3" placeholder="tejas*" required>
		  	</div>		  	
		  	<br><br><br>
		  </div>

		  <div class="row">
		  	<div class="col-md-12">
		  		<h3>Your three enemies ?</h3>
		  		<br>
		  	</div>
		  </div>
		  <div class="row">
		  	<div class="col-md-4">
		  		<input type="text" name="enemy1" placeholder="abc*" required>
		  	</div>
		  	<div class="col-md-4">
		  		<input type="text" name="enemy2" placeholder="abc*" required>
		  	</div>
		  	<div class="col-md-4">
		  		<input type="text" name="enemy3" placeholder="abc*" required>
		  	</div>		  	
		  	<br><br><br>
		  </div>

		  <div class="row">
		  	<div class="col-md-6">
		  		<h3>Your age ?</h3>
		  		<br>
		  		<input type="text" name="age" placeholder="20*" required>
		  		<br><br><br>
		  	</div>	
		  	<div class="col-md-6">	
		  		<h3>Your favourite hobby ?</h3>
		  		<br>
		  		<input type="text" name="hobby" placeholder="sports*" required>
		  		<br><br><br>
		  	</div>	
		  </div>

		  <div align="center">
		  	<input type="submit" name="submit">
		  	<br><br>
		  </div>		  		  		  
		</div>  
	</div>	
</div>



		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>
		<footer>
			<div class="container text-center">
				<p>Designed by <a href="#">TEAM QWERTY</a></p>
			</div>
		</footer>


		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>
		<script src="js/theme-scripts.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>