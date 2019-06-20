<?php 
include('header.php');
include_once("db_connect.php");
session_start();
?>

<?php include('container.php');?>
<div class="container">	
	
	<br>
	<br>
	<div class="collapse navbar-collapse" id="navbar1">
		<ul class="nav navbar-nav navbar-left">
			<?php if (isset($_SESSION['userid'])) { ?>
			<li><p class="navbar-text"><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['name']; ?></strong></p></li>
			<br>
			<li><a href="gallery.php"><strong>View Image Gallery</strong></a></li>
			<li><a href="logout.php">Log Out</a></li>
			<?php } else { ?>
			<li><a href="index.php">Login</a></li>				
			<?php } ?>
		</ul>
	</div>	
	<br>
	
</div>
<?php include('footer.php');?>
