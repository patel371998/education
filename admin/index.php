<?php 
include('header.php');
include_once("db_connect.php");
session_start();
if(isset($_POST["login"])) {
	$email=$_POST["email"];
	$password=$_POST["password"];
	$sql_query="SELECT id, email, password, first_name, last_name FROM user WHERE email='$email' AND password='$password'";
	$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
	$row=mysqli_fetch_array($resultset);
	if(mysqli_num_rows($resultset)>0) {
		$_SESSION["userid"]=$row["id"];
		$_SESSION["name"]=$row["first_name"]." ".$row["last_name"];
		header("location:user.php");
	} else {
		echo "Login details not correct! Please try again.";
	}
	mysql_close($con);
}
if (isset($_SESSION['userid'])) {
	header("location:user.php");
}
?>

<?php include('container.php');?>
<div class="container">	
	
	<br>
	<br>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Login</legend>						
					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" placeholder="Your Email " required class="form-control" />
					</div>	
					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
					</div>	
					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>			
		</div>
	</div>
	
	
</div>
<?php include('footer.php');?>
