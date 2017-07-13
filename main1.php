<!DOCTYPE html>
<?php
require'database.php';
include'variables.php';

?>
       <html>
           <head>
                      <!-- Css files-->
             <meta http-equiv=Content-Type content="text/html;charset=UTF-8">
             <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
             <link type="text/css" rel="stylesheet" href="css/mainStyle.css"/>
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
	   include'normal_panel.php';}
	   ?>
    
	
             <!--Billboard-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active billboard-img">
      <img class="billboard-img" src="Pictures/o-HELPING-HAND-facebook.jpg" >
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item billboard-img">
      <img class="billboard-img" style="width:100%;" src="Pictures/immigration3.jpg">
      <div class="carousel-caption">
      </div>
    </div>
       <div class="item billboard-img">
      <img class="billboard-img" style="width:100%;" src="Pictures/immigration2.jpg" >
      <div class="carousel-caption">
      </div>
    </div>
      
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!--BillBoard--> 
        
             <!-- Information panel-->
        <div class="container">
                  <div class="page-header">
                      <h1 class = "namings" id="information">Information</h1>
                  </div>
                   <div class="row">
                       <a href="news.php"> 
                       <div class="col-sm-6 col-md-4">
                            
                            <div class="thumbnail">
                               <img src="Pictures/news.jpg" alt="...">
                                <div class="caption">
                                  <h3>News</h3>
                                   <p> By clicking this section you will be transferred to the news page, which provides political, economical and immigration news about Russian Federation.
                                   </p>
                                 </div>
                            </div>  
                         </div>
                         </a>
                      <a href="documents.php">  
                       <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                               <img class="inf-img" src="http://icons.iconarchive.com/icons/wilnichols/alumin-folders/512/Documents-Black-Folder-icon.png" alt="...">
                                <div class="caption">
                                  <h3>Documents</h3>
                                   <p>To get information about all necessary documents required to stay and work  in Russian Federation, please click on this link.
                                   </p>
                                 </div>
                            </div>
                       </div>
                      </a>
                      <a href="maps.php">  
                       <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                               <img class="inf-img" src="https://s-media-cache-ak0.pinimg.com/736x/3d/dc/46/3ddc46f168744847dcb5f99e5ba5a2dd.jpg" alt="...">
                                <div class="caption">
                                  <h3>Maps</h3>
                                   <p>By clicking  this section you will be transferred to the maps page, which provides the information about the address inserted in the search bar.
                                   </p>
                                   
                                 </div>
                            </div>
                       </div>
                    </a>      
                   </div>
            <!--Translator and Help panel -->
                 <!--Translator div-->
                  <div class="row" style="margin-bottom:70px">
                        <!--Translator-->
                      <div class="col-md-4 col-md-offset-1">
                          <!-- Tittle-->
                         <div class="page-header">
                           <h1 class = "namings" id="translator">Translator</h1> 
                        </div>
                        <!--Message Box-->
                          <!--Input-->
          <label id="messageLabel" for="message">Input</label>
          <div class="btn-group" style="margin-bottom:10px;margin-top:10px">
               <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{sourceLan}} <span class="caret"></span>
               </button>
             <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                 <li ng-click="changeLan('tr',1)"><a href="">Russian</a></li>
                 <li ng-click="changeLan('en',1)"><a href="">English</a></li>
             </ul>
          </div>
      
                          <textarea class="form-control input-sm " type="textarea" id="message" placeholder="EnterText" maxlength="50" rows="3" ng-model="word" ng-change="deleteWord()"></textarea>
                          <!--Output-->
                          <label id="messageLabel" for="message">Output</label>  
                        <div class="btn-group" style="margin-bottom:10px;margin-top:10px">
                          <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{destinationLan}} <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                             <li ng-click="changeLan('tr',2)"><a href="">Russian</a></li>
                             <li ng-click="changeLan('en',2)"><a href="">English</a></li>
                          </ul>
                        </div>
                          <div style="height:50px;padding-top:5px;padding-left:5px" class="jumbotron">
                              <h4>{{translatedText}}</h4>
                          </div>
                          <button class="form-control input-sm btn btn-success" id="btnSubmit" name="btnSubmit" type="button" style="height:35px" ng-click="translate(word)">Translate</button>
                      </div>
                  <!--Aid Help div-->      
                    <?php
					if(!empty($_SESSION['id'])&&isset($_SESSION['id']))
					{ include'message_enable.php';
					}
					else
					{
					include'message_disable.php';
					}
					?>
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