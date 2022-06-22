<?php include("connection.php");

if (isset($_GET["id"])){
	$id=$_GET["id"];
	
	
	$sql = "SELECT * FROM mobile_network WHERE id='$id'";
	
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {   ?>
	       

	

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Starter Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

     body {
    	background-color: lightblue;
    	/*background-image: url("gradient_bg.png");
        background-repeat: repeat-x;*/
	}
    </style>
	
	<style>
	.embed-container{position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} 
	.embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} 
	small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}
	</style>
    <!-- Custom styles for this template -->
  <link href="assets/dist/css/starter-template.css" rel="stylesheet">
  </head>
  <body class="starter-template">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		  <a class="navbar-brand" href="#">Mobile Networks Packages</a>	  
	</nav>
<main role="main" class="container">
  <div class="starter-template">
	 <a href="records.php" class="btn alert-success">
		 <div  >
			  <strong>Back</strong>
		</div>
	</a>
	<br/><br/>
	<div class="alert alert-success">
		  <strong>Bundle that Suit me. !</strong> Peruzi sasa.

	</div> 

	<div class="alert alert-success">
		  <strong><?php  echo "Netword ID: " . $row["id"]. " <br> Network Name: " . $row["network_name"]. " <br>  Headquater OFFice  " . $row["headquater"]. " <br>  Website " . $row["website"]. "<br>"; ?> </strong> 

		  
	</div> 
  </div>
</main><!-- /.container -->


<script src="assets/dist/jquery/jquery-3.1.0.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
     </body>
</html>

        <?php
	    }
	} else {
	    echo "0 results";
	}



	
}
?>
