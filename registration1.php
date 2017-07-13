<!DOCTYPE html>
        <html>
           <head>
                      <!-- Css files-->
             <meta http-equiv=Content-Type content="text/html;charset=UTF-8">
             <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
             <link type="text/css" rel="stylesheet" href="css/registrationStyle.css"/>
             <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">   
           </head>
         <body ng-app="myApp" ng-controller="PageController">
          <!-- Registration-->
		  
             <div class="center-box">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Register please</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form action="<?php echo$_SERVER['Script_name']?>" method="POST">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="name"  class="form-control input-sm" value="<?php echo$_POST['name'];?>"placeholder="First name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="surname"  class="form-control input-sm" value="<?php echo$_POST['surname'];?>" placeholder="Surname">
			    					</div>
			    				</div>
			    			</div>

			    			
							<div class="form-group">
                              <input type="text" name="username"  class="form-control input-sm" value="<?php echo$_POST['username'];?>" placeholder="Username">
							</div> 
							 <div class="form-group">
			    						<input type="text" name="email"  class="form-control input-sm" value="<?php echo$_POST['email']?>" placeholder="Email">
			    					</div>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password"  class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="re-pass" class="form-control input-sm" placeholder="Confirm password">
			    					</div>
			    				</div>
			    			</div>
                            <div class="row">
			    	
			    				
			    			</div>
			    			<p><?php
include'database.php';
include'variables.php';
if(isset($_POST['register']))
{



if(!empty($_POST['name'])&&!empty($_POST['surname'])&&!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($_POST['re-pass'])&&!empty($_POST['email']))
{ @$name=$_POST['name'];
@$surname=$_POST['surname'];
@$username=$_POST['username'];
@$password=$_POST['password'];
@$re_pass=$_POST['re-pass'];
@$email=$_POST['email'];
@$date = date('Y/m/d', time());
$check="SELECT username FROM users WHERE username='$username'";
$re=mysql_query($check);
$rows=mysql_num_rows($re);
$strlen = strlen( $email );

for( $i = 0; $i <= $strlen; $i++ ) {
    $char = substr( $email, $i, 1 );
    if( $char=="@") { break; }
else 
{
continue;
}
}
  if($rows==1)
   {echo'Username already exists';}
  else
  { if($char=="@"){
    if($password==$re_pass)
	 { 
	 $insert="INSERT INTO users VALUES('','$name','$surname','$username','$password','$email','User','Yes','$date','0','0')";
	  if(mysql_query($insert))
	    {
		echo'Your registration was successful<br/>';
		
		$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
		$run=mysql_query($query);
		$_SESSION['id']=mysql_result($run,0,'id');
		$_SESSION['name']=mysql_result($run,0,'name');
		$_SESSION['surname']=mysql_result($run,0,'surname');
		$_SESSION['username']=mysql_result($run,0,'username');
		header( "refresh:1; url=main1.php" );
		}
	   else
	   {
	   echo'Registration is not possible at the moment';
	   }
	 }
	else
     {
	 echo'Passwords do not match';
	 }	
	 }
	 else
	 {
	 echo"Invalid email, please enter a valid email";
	 }
	
  }


}
else
{
echo'Fill in all the blanks please';
}


}
?></p>
			    			<input type="submit" name="register" value="Register" class="btn btn-info btn-block" style="margin-bottom:5px">
			    		
			    		</form>
						

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