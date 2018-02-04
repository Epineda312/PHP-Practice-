<!-- PHP CODE BLOCK-->  
  <?php
    $display_name = 'Eric Pineda';
    $email = 'Epineda773@protonmail.com';
  ?>
<!-- PHP CODE BLOCK END-->  
<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title>PHP Basics by <?php echo $display_name;?></title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
            <img src="img/logo.png" alt="Alt For Image">
          </div>
          <h1><?php echo $display_name;?></h1>
          <p>Contact:<br />
          <a href="mailto:"><?php echo $email;?></a></p>
          <hr />
          <ul class="social">
            <li><a href=""><span class="icon twitter"></span></a></li>
          </ul>
          <hr />
          <p>Today: D, d M Y</p>
        </section>
        <section class="main">
          <h1>My First PHP Page</h1>
    
          <h2>Unit Conversion</h2>
          <!-- PHP CODE BLOCK-->    
          <?php include 'inc/units.php';?>
           <!-- PHP CODE BLOCK-->    
          <hr />
              
          <h2>Daily Exercise</h2>
          <!-- PHP CODE BLOCK--> 
          <?php include 'inc/exercise.php';?>
          <!-- PHP CODE BLOCK-->    
        </section>
    </div>
    <section class="footer text-center">
      &copy; 
<!-- PHP CODE BLOCK-->    
    <?php 
        //Display Current Year In footer
        echo date('Y');
        //Display Name Next To Date In Footer
        echo " " . $display_name . ". ";
        // outputs e.g. 'Last modified: March 04 1998 20:43:59.'
        echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
    ?>
<!-- PHP CODE BLOCK END-->   
    </section>
  </body>
</html>
