<html>
<head>
<meta http-equiv=Content-Type content="text/html">
             <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
             <link type="text/css" rel="stylesheet" href="css/mainStyle.css"/>
             <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">  
</head>
<body style="background-color:#F4F6F7;">


<?php
include'imm_off_nav.php';

?>
<br/><br/><br/>
<h2 style="text-align:center">Reply to the message:</h2>
 <div class="col-md-4 col-md-offset-2">
<?php
include'database.php';
include'variables.php';
$mess=$_GET['mess'];
$query="SELECT * FROM messages WHERE id='$mess'";
$run=mysql_query($query);
$name=mysql_result($run,0,'name');
$surname=mysql_result($run,0,'surname');
$content=mysql_result($run,0,'content');
echo"<strong><h4>$name  $surname:</h4> </strong><br/>";
echo"<h5>$content</h5>"
?>
	</div><br/><br/>	<br/><br/><br/><br/>
 <div class="col-md-4 col-md-offset-2">
                           <!-- Tittle-->
                          <div class="page-header">
                          
                          </div>
                         <a name="Message"></a>  
						 <!--Message Box--> 
                          <label id="messageLabel" for="message">Message </label>
						  <form action="#Message" method="POST">
                          <textarea class="form-control input-sm " name="content" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                          <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                      
                          <br style="clear:both">
						  <p><?php
						  if(isset($_POST['btnSubmit']))
						  {
						   if(isset($_POST['content'])&&!empty($_POST['content']))
						    {
							
							$date=date("Y/m/d h:i:s a", time());
							$content=$_POST['content'];
							
							
							$query="UPDATE messages SET answer='$content',date_answer='$date' WHERE id='$mess'";
							if(mysql_query($query))
							{
							echo'Your reply was successfully sent';
							}
							else
							{
							echo mysql_error();
							}
							
							}
							
							else
							{
							echo'Please type a message to send';
							}
						  
						 }
						  
						  ?></p>
                          <button class="form-control input-sm btn btn-success enabled" id="btnSubmit" name="btnSubmit" type="submit" style="height:35px"> Send</button>
                          </form>
					  </div>







<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
           <script src="js/bootstrap.min.js" type="text/javascript"></script> 
           <script src="js/angular.min.js" type="text/javascript"></script> 
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/maincontroller.js" type="text/javascript"></script>

</body>
</html>
