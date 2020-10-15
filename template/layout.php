<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>TEMPLATE</title>
  
       <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		

		 <link rel="stylesheet" href="stylesheet/owl.carousel.min.css">
          <link rel="stylesheet" href="stylesheet/owl.theme.default.min.css">
	  
	 
		  	      <link rel="stylesheet" href="css/style.css">
				  
				<link rel= "https://fonts.googleapis.com/css?family=Abel&amp;text=0123456789">
		  

   </head>
   	

	<body>
	<?php include "navigation.php"; ?>

	
	
	<?php
	
			
			@$page=$_GET["page"];
           if($page =="" || $page=="home"){
			require_once 'contenu.php';
		   }
		   else if($page=="copie"){
			   require 'copie.php';
		   }
           
	?>
		
		
	<script src="js/jquery-3.3.1.min.js"></script> <!-- jQuery est inclus ! -->
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<script src="js/owl.carousel.js"></script>	   <script src="js/jquery.color.js"></script> <!-- jQuery est inclus ! -->
     
	 <script src="js/icons.js"></script>
	 	 <script src="js/ja.js"></script>


   <script>
 $(document).ready(function(){ //on charge le document , ici page html, avant toute execution de code dans fonction anonyme

			   // Du code en jQuery va pouvoir être tapé ici !

  		
          $(".owl-carousel").owlCarousel( {
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:700,
    autoplayHoverPause:true
	}
		  );
	
	
	
    $('.owl-carousel3').owlCarousel({
    items:4,
    lazyLoad:true,
    loop:true,
    margin:10
});
	
   
  /* $(document).ready(function(){

     $('navbarDropdownMenuLink').mouseover(function() {
			$(this).dropdown('toggle')
  
		});
		
		  $('menupo').mouseover(function() {
			$(this).dropdown('toggle');
  
		});
		*/
  
  });
  
  
  
    </script>
	 <?php include "footer.php";?>
   </body>
</html>

