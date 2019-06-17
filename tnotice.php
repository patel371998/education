<?php
include("dbconnect.php");
?>

<?php include 'header.php';?>
        
      <!-- start banner Area -->
      <section class="banner-area relative about-banner" id="home"> 
        <div class="overlay overlay-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
              Teachers Notice    
              </h1> 
              
            </div>  
          </div>
        </div>
      
      </section>

      <div style="padding:100px";>
<center>
  <h1>
      <?php
$result = $_GET['image'];
?>
<img src="uploaded_files/<?php echo $result; ?>.jpg">
      
</h1>
</center>
          </div>
            

            <?php include 'fotter.php';?>