<!DOCTYPE html>

<?php if($this->session->userdata['panel']=='frontend')
{ $getPhone=$this->loan_model->get_phone();?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php if(!empty($getPhone[0]['title'])) { echo $getPhone[0]['title']; } ?></title>

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
     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117121524-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());  gtag('config', 'UA-117121524-1');
    </script>

    <!-- Global site tag (gtag.js) - Google AdWords: 829513051 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117121524-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());  gtag('config', 'UA-117121524-1');
    </script>

    <!-- Global site tag (gtag.js) - Google AdWords: 829513051 
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-829513051"></script>
    <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());  gtag('config', 'AW-829513051');
    </script>    
   Google Analytics -->
    <script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-117121524-1', 'auto'); 
    ga('send', 'pageview');
    </script>
    <!-- End Google Analytics --> 
  </head>
  <body >
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

  <?php if(!empty($getPhone[0]['tagline'])) { echo $getPhone[0]['tagline']; } ?>

  </body>
</html>

 <!-- Footer ends here -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
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
    
<?php } 
if(isset($this->session->userdata['userdata']['panel'])) 
{
   
if($this->session->userdata['userdata']['panel']=='admin')
{
    ?>
    
    
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo (isset($title)) ? $title : 'culoanportal'; ?> </title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo BASE_URL; ?>public/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo BASE_URL; ?>public/admin/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo BASE_URL; ?>public/admin/css/animate.min.css" rel="stylesheet">
        <!-- Custom styling plus plugins -->
        <link href="<?php echo BASE_URL; ?>public/admin/css/custom.css" rel="stylesheet">
        <link href="<?php echo BASE_URL; ?>public/admin/fonts/icomoon/styles.css" rel="stylesheet" type="text/css">
        <link href="<?php echo BASE_URL; ?>public/admin/css/components.css" rel="stylesheet">
        <link href="<?php echo BASE_URL; ?>public/admin/css/icheck/flat/green.css" rel="stylesheet">
        <script src="<?php echo BASE_URL; ?>public/admin/js/jquery.min.js"></script>

        

    </head>
    
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                <?php
                 $this->load->view('adminlayout/adminheader', $data);
                ?>
                <!-- top navigation -->

                <!-- /top navigation -->
                <?php $this->load->view('adminlayout/navigation', $data); ?>
                <!-- page content -->

                <div class="right_col" role="main">

                <?php $this->load->view($view, $data); ?>

                  </div>
                <!-- /page content -->    
                <?php $this->load->view('adminlayout/footer', $data); ?>
                    <!-- /footer content -->
              
            </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <!-- Bootstrap -->
        <script src="<?php echo BASE_URL; ?>public/admin/js/bootstrap.min.js" data-semver="3.1.1" data-require="bootstrap"></script>
        <script src="<?php echo BASE_URL; ?>public/admin/js/bootbox.js"></script>

       <!-- <script src="<?php echo BASE_URL; ?>public/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>-->
        <!-- FastClick -->
       
        <!-- Custom Theme Scripts -->
        <script src="<?php echo BASE_URL; ?>public/admin/build/js/custom.min.js"></script>
        <script src="<?php echo BASE_URL; ?>public/admin/js/pace/pace.min.js"></script> 
        <script src="<?php echo BASE_URL; ?>public/admin/js/icheck/icheck.min.js"></script>
        <script>


        </script>
    </body>
</html>


    
    <?php
}
}
?>