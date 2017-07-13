 <div class="col-md-4 col-md-offset-2">
                           <!-- Tittle-->
                          <div class="page-header">
                            <h1 class = "namings" id="help">Aid Help</h1>
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
							$id=$_SESSION['id'];
							$name=$_SESSION['name'];
							$surname=$_SESSION['surname'];
							$date=date("Y/m/d h:i:s a", time());
							$content=$_POST['content'];
							$check="SELECT * FROM messages WHERE content='$content' AND u_id='$id'";
							$run=mysql_query($check);
							$rows=mysql_num_rows($run);
							if($rows==1)
							{
							echo'Your message is already sent';
							}
							else
							{
							$query="INSERT INTO messages VALUES('','$id','$name','$surname','4','$content','$date','No','0')";
							if(mysql_query($query))
							{
							echo'Your message was sent successfully to the immigration officer, please wait for your response';
							}
							else
							{
							echo mysql_error();
							}
							
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