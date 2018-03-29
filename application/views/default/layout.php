<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Coastal Community FCU Galveston, Tx</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>public/html/css/font.css" rel="stylesheet" />
	<link href="<?php echo BASE_URL; ?>public/html/css/font-awesome.min.css" rel="stylesheet" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    
    <!-- Custom CSS -->
    <link href="<?php echo BASE_URL; ?>public/html/css/mainlayout.css" rel="stylesheet">
	<link href="<?php echo BASE_URL; ?>public/html/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Header starts here -->
   <?php  $this->load->view('layout/header', $data);
?>
    <!-- Header ends here -->
    
    <!-- Main section starts here -->
       <?php $this->load->view($view, $data); ?>
 
    <!-- Main section ends here -->
    
    <!-- Footer starts here -->
   <?php  $this->load->view('layout/footer', $data);
 ?>
    <!-- Footer ends here -->

  

  </body>
</html>

 <!-- Footer ends here -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
      var winWidth = $(window).width();
      $( document ).ready(function() {
      if (winWidth >= 767)
        {
          var bannerHeight = $('.offer-main').height();
          $('.banner-left').css("height", bannerHeight+100);
        }
      });
    </script>