<!DOCTYPE html>
        <html>
           <head>
                      <!-- Css files-->
             <meta http-equiv=Content-Type content="text/html;charset=UTF-8">
             <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
             <link type="text/css" rel="stylesheet" href="css/registrationStyle.css"/>
             <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">   
           </head>
         <body ng-app="myApp" ng-controller="PageController" style="background-color:rgb(249, 248, 244, 0.41);">
          <!-- Registration-->
		  
             <div class="center-box">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please type your username</h3>
						
			 			</div>
			 			<div class="panel-body">
			    		<form action="<?php echo$_SERVER['Script_name']?>" method="POST">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="ans"  class="form-control input-sm" placeholder="Username">
			    					</div>
			    				
                       <?php
						include'variables.php';
						include'database.php';
						
						
						if($_POST['register'])
						{ if(!empty($_POST['ans'])&&isset($_POST['ans']))
						   { $ans=$_POST['ans'];
						     $query="SELECT * FROM users WHERE username='$ans'";
							 $run=mysql_query($query);
							 $rows=mysql_num_rows($run);
							 if($rows==1)
							 {
							 $email=mysql_result($run,0,'email');
							 echo'Password has been sent to your following email:<br/>';
							 echo'<strong>'.$email.'</strong>';
							 header( "refresh:5;url=main1.php" );
							 }
							 else
							 {
							 echo'Such username does not exist<br/>';
							
							 }
					
						   }
						  
						
						}
						?>
			    			<input type="submit" name="register" value="Submit" class="btn btn-info btn-block">
			    		
			    		</form>
						</div>
                </div>
			   </div>
    		</div>
    	</div>
    </div>
	</div>
             <!--JS files-->
           <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
           <script src="js/bootstrap.min.js" type="text/javascript"></script> 
           <script src="js/angular.min.js" type="text/javascript"></script> 
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/maincontroller.js" type="text/javascript"></script>
       </body>
    </html>