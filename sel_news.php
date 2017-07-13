
<!DOCTYPE html>
        <html>
		<?php
		include'variables.php';
		include'database.php';
		
		?>
           <head>
                      <!-- Css files-->
             <meta http-equiv=Content-Type content="text/html;charset=UTF-8">
             <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
             <link type="text/css" rel="stylesheet" href="css/selectednews.css"/>
             <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">   
           </head>
         <body ng-app="myApp" ng-controller="PageController" style="background-color:#fff">
             
       <!--NavbAr-->
   <?php
	   if($_SESSION['id']==2)
	   {include'admin_nav.php';}
	   else if($_SESSION['id']==3)
	   {include'info_man_nav.php';}
	    else if($_SESSION['id']==4)
	   {include'imm_off_nav.php';}
	   else 
	   {
	   include'blog_panel.php';}
	   ?>
             <!--Selected News content --> 
			  

  <!-- Overlay -->
  
 <?php

include'variables.php';
include'database.php';
$id=$_GET['dis'];
$query="SELECT * FROM news WHERE id='$id'";
$run=mysql_query($query);
$heading=mysql_result($run,0,'header');
$photo=mysql_result($run,0,'photo');
$content=mysql_result($run,0,'content');
$like=mysql_result($run,0,'likes');
$new="SELECT * FROM users WHERE id='3'";
$ex=mysql_query($new);
$name=mysql_result($ex,0,'name');
$surname=mysql_result($ex,0,'surname');
$date=mysql_result($run,0,'date');
?>
  <!-- Wrapper for slides -->
 <header id="page-top" style="">
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3" id="bs-carousel">
  <!-- Overlay -->
  
  
  <!-- Wrapper for slides -->
 <div class="carousel-inner" style="height:400px">
    <div class="item active">
      <?php echo "<img src='news/".$photo."' class=img-responsive width=100%;> ";?>
      <div class="hero">
        <hgroup>
            <h2><?php echo $heading;?></h2>        
            
        </hgroup>
      </div>
    </div>
 </div>
</div>
</header>
<div class="content-wrapper" style="z-index:5">
    <section class="primary" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr class="star-primary">
       
            <div class="box" style="z-index:5">
                <div class="info" style="z-index:5">
                    <h4 class="text-center"><?php echo$heading;?></h4>
                    <p style="font-size:25px"><?php echo$content;?></p>
					<p style="text-align:center;"><strong>Published by:</strong><em><?php echo $name.' '.$surname;?></em></p>
					<p style="text-align:center;"><?php echo$date;?></p>
        </div>
                    </div>
                </div>
            </div>
            
        </div>
		<h1 style="text-align:center;">Click below link to go to News page:</h1>
<div class="container" style ="padding-top:10px;padding-left:480px"> 
 
 <a href="news.php" style="text-decoration:none"><button type="button" class="btn btn-primary btn-circle btn-xl"><i class="glyphicon glyphicon-list"></i></button></a>
    
 </div>
    </section>
    
</div>
         
             

      
            
             <!--JS files-->
           <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
           <script src="js/bootstrap.min.js" type="text/javascript"></script> 
           <script src="js/angular.min.js" type="text/javascript"></script> 
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/maincontroller.js" type="text/javascript"></script>
       </body>
    </html>