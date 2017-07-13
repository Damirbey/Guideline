 <div class="col-md-4 col-md-offset-2" ng-class="{disabled: !status}">
                           <!-- Tittle-->
                          <div class="page-header">
                            <h1 class = "namings" id="help">Aid Help</h1>
							<h5><em>To be able to send message please sign in</em></h5>
                          </div>
                           <!--Message Box--> 
                          <label id="messageLabel" for="message">Message </label>
                          <textarea class="form-control input-sm " type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                          <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                      
                          <br style="clear:both">
                          <button class="form-control input-sm btn btn-success disabled" id="btnSubmit" name="btnSubmit" type="button" style="height:35px"> Send</button>
                      </div>