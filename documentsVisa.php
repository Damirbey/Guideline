<!DOCTYPE html>
        <html>
           <head>
                      <!-- Css files-->
             <meta http-equiv=Content-Type content="text/html;charset=UTF-8">
             <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
             <link type="text/css" rel="stylesheet" href="css/documents.css"/>
             <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">   
           </head>
         <body ng-app="myApp" ng-controller="PageController" style="background-color:rgba(249, 248, 244, 0.41);">
             
       <!--NavbAr-->
    <?php
	  include"database.php";
	   if($_SESSION['id']==2)
	   {include'admin_nav.php';}
	   else if($_SESSION['id']==3)
	   {include'info_man_nav.php';}
	   else if($_SESSION['id']==4)
	   {include'imm_off_nav.php';}
	   else 
	   {
	   include'documents_panel.php';}
	   ?>
             <!--Documents div -->
        <div class="container" style="margin-top:50px">
  <div class="row" style="margin-right:5px">
    <div class="col-lg-12">
      <h1 class="text-center">Documents for Visa</h1>
      <p class="text-center" style="font-size: 20px;line-height: 1.7;">
       To obtain a Russian visa a foreign citizen having a base to obtain a visa, submit to the diplomatic mission or consular office of the Russian Federation, the following documents:
      </p>
      <ul class="timeline">
        <li>
          <div class="timeline-image">
            <img class="thumbnail" src="pictures/Old_Tajik_passport.svg.png" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step One</h4>
              <h4 class="subheading">Passport</h4>
            </div>
            <div class="timeline-body">
              <p class="description_of_steps">
                A valid identity document and accepted as such by the Russian Federation
              </p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <img class="thumbnail" src="pictures/567_vizovaia-anketa.jpg" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step Two</h4>
              <h4 class="subheading">VISA Application Form</h4>
            </div>
            <div class="timeline-body">
              <p>
                Completed visa application form with a photo<br><a href="documents/Vizovaya_anketa.doc" >Click here to download a Word document</a><br>
                 
              </p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-image">
            <img class="thumbnail" src="pictures/medical_insurenc.jpg" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step Three</h4>
              <h4 class="subheading">Medical Insurance</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
               Medical insurance policy valid on the territory of the Russian Federation
              </p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <img class="thumbnail" src="pictures/hiv_med_in.jpg" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step Four</h4>
              <h4 class="subheading">HIV test mediacal insurance</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
               If a foreign national applies for a visa for more than three months, he must additionally submit a certificate of absence of HIV infection.
              </p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
            <!--Usefull Inf-->
            <div class="container" style="margin-top:70px">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a style="text-decoration:none" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Conditions for obtaining a Russian visa 
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
       The size of the consular fee levied for registration of the Russian visa is determined on the basis of reciprocity. For citizens of the European Union fee for a visa is 35 euros, and in the case of an urgent issue (within three days), it will be doubled.

For ordinary private, labor, educational, humanitarian delovoylibo visa must submit an invitation to enter the Russian Federation, which is issued by territorial bodies of the Russian Interior Ministry , unless otherwise stipulated by international treaties of the Russian Federation.

With the petition for registration of invitations may contact the local authorities, legal entities and branches of foreign legal entities (for the implementation of employment), the citizens of the Russian Federation permanently residing in the Russian Federation, foreign citizens, highly qualified specialists - in respect of members of his family (with a private purpose ).

Depending on the number of entries allowed - departures, visas can be single, double or multiple.

The actual purpose of the entry of the foreign citizen and the purpose of his stay in the Russian Federation should correspond to the type of visa issued to him.

A foreign citizen at the entrance to the Russian Federation migration card fills, indicating therein the information contained in the visa, and on arrival at their destination in the Russian Federation makes available documents for the receiving end of migration registration.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a style="text-decoration:none" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          The period of validity
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Length of stay of foreign citizens in the Russian Federation is determined by the validity of the visa issued to him.

At the same time, foreign citizens arriving to the Russian Federation for multiple business or humanitarian multiple annual visas may reside in the Russian Federation in total no more than 90 days per period of 180 days.

A foreign citizen is obliged to leave the Russian Federation at the end of the authorized period of stay.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a style="text-decoration:none" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          The responsibility of foreign citizens for violation of the stay in the Russian Federation
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        A foreign citizen, deviating from the exit from the Russian Federation upon the expiry of a visa or in case of loss of documents not filed a statement about the loss of a visa in accordance with the law to be brought to administrative responsibility in the form of a fine ranging from 2,000 to 7,000 rubles.) With administrative expulsion outside the Russian Federation, and the subsequent Unauthorized entry into the Russian Federation for 5 years.  
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