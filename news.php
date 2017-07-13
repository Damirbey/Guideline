<!DOCTYPE html>
        <html>
						<?php
require'database.php';
include'variables.php';

?>
           <head>
                      <!-- Css files-->
             <meta http-equiv=Content-Type content="text/html;charset=UTF-8">
             <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
             <link type="text/css" rel="stylesheet" href="css/news.css"/>
             <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">   
           </head>
         <body ng-app="myApp" ng-controller="PageController" style="background-color:rgba(249, 248, 244, 0.41);">
             
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
             <!--News div -->
			 <div class="container">
      <div class="row" style="margin-top:40px">
            <div class = "col-md-3" >
                <!--News Header-->
                 <div class="page-header" style="text-align: center;height:35px">
                           <h3>Political News</h3>
                 </div>
               
            
                 <!-- Picture and title-->
				 <?php
				 $query="SELECT * FROM news WHERE category='Political' ORDER BY id DESC";
				 $run=mysql_query($query);
				 while($dis=mysql_fetch_assoc($run))
				 {
				 
				 ?>
            <div class="panel panel-default" style="padding:10px;" >
                <div class="panel-body" >
                    <a href="" class="zoom"  data-type="image" data-toggle="lightbox">
                        <?php echo "<img src='news/".$dis['photo']."' class=img-circle img-thumbnail height = '300px'> "?>
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
             
                
                 <a href="sel_news.php?dis=<?php echo$dis['id'];?>" style="color:black; ">
                        <h4 style="color:black; "> <span class="glyphicon glyphicon-record" style="margin-right:5px" aria-hidden="true"></span><?php echo$dis['header'];?></h4>
                    </a>
					<p><em><?php echo '<strong>Published on:</strong>'.' '.$dis['date'];?></em></p>
            </div>
            <?php }?>
         </div>
            <div class = "col-md-6">
                <!--News Header-->
                 <div class="page-header" style="text-align: center;height:35px">
                           <h2 >Immigration News</h2>
                 </div>
                <!-- Picture and title-->
				<?php
				 $query="SELECT * FROM news WHERE category='Immigration' ORDER BY id DESC";
				 $run=mysql_query($query);
				 while($dis=mysql_fetch_assoc($run))
				 {
				 
				 ?>
            <div class="panel panel-default" style="padding:10px;" >
                <div class="panel-body" >
                    <a href="" class="zoom"  data-type="image" data-toggle="lightbox">
                        <?php echo "<img src='news/".$dis['photo']."'  height = '300px'> "?>
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
             
                
                <a href="sel_news.php?dis=<?php echo $dis['id'];?>">
                        <h3> <span class="glyphicon glyphicon-time" style="margin-right:5px" aria-hidden="true"></span><?php echo$dis['header'];?></h3>
                    
					</a>
					<p><em><?php echo '<strong>Published on:</strong>'.' '.$dis['date'];?></em></p>
            </div>
            <?php }?>
                  </div>
				  
            <div class = "col-md-3" style="max-height:200px;">
                <!--News Header-->
                 <div class="page-header" style="text-align: center;height:35px">
                           <h3>Economy of Russia</h3>
                 </div>
                <!-- Picture and title-->
				
				<?php
				 $query="SELECT * FROM news WHERE category='Economy' ORDER BY id DESC";
				 $run=mysql_query($query);
				 while($dis=mysql_fetch_assoc($run))
				 {
				 
				 ?>
            <div class="panel panel-default" style="padding:10px;" >
                <div class="panel-body" >
                    <a href="" class="zoom"  data-type="image" data-toggle="lightbox">
                        <?php echo "<img src='news/".$dis['photo']."' class=img-responsive img-rounded center-block height = '300px'> "?>
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
             
                
                 <a href="sel_news.php?dis=<?php echo $dis['id'];?>"style="color:black;" >
                        <h4 style="color:black;" > <span class="glyphicon glyphicon-record" style="margin-right:5px" aria-hidden="true"></span><?php echo$dis['header'];?></h4>
                    </a>
					<p><em><?php echo '<strong>Published on:</strong>'.' '.$dis['date'];?></em></p>
            </div>
            <?php }?>
            
            
          </div>
        </div>
		
		</div>
		
             <!-- <div class="panel-footer">
                    <h4><a href="#" title="Nature Portfolio">Nature</a></h4>
                    <span class="pull-right">
                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                    </span>
                </div>-->
                           
             <!--JS files-->
           <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
           <script src="js/bootstrap.min.js" type="text/javascript"></script> 
           <script src="js/angular.min.js" type="text/javascript"></script> 
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/maincontroller.js" type="text/javascript"></script>
       </body>
    </html>
                           
          