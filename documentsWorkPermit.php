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
  <div class="row">
    <div class="col-lg-12">
      <h1 class="text-center">Registration of work permits to foreign nationals</h1>
      <p class="text-center" style="font-size: 20px;line-height: 1.7;">
      The public service is to issue opinions on the recruitment and use of foreign workers permits to employ foreign workers and work permits for foreign citizens and persons without citizenship
      </p>
      <ul class="timeline">
        <li>
          <div class="timeline-image">
            <img class="thumbnail" src="pictures/obrazec-zayavleniya-na-patent-na-raboty.jpg" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step One</h4>
              <h4 class="subheading">Application</h4>
            </div>
            <div class="timeline-body">
              <p class="description_of_steps">
                  The <a href="documents/for_workpermit.XLS" style="text-decoration:none">application</a> for a permit to work in each foreign citizen.
              </p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <img class="thumbnail" src="pictures/photo.jpg" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step Two</h4>
              <h4 class="subheading">Photo</h4>
            </div>
            <div class="timeline-body">
              <p>
                Colored picture of the size of 30 x 40 mm.
                 
              </p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-image">
            <img class="thumbnail" src="pictures/iden_doc.jpg" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step Three</h4>
              <h4 class="subheading">Copy of the identity document</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
               A copy of the identity document of the foreign citizen and recognized by the Russian Federation as such.
              </p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <img class="thumbnail" src="pictures/narko_spr.jpg" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step Four</h4>
              <h4 class="subheading">Mediacal insurance</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
               Documents confirming the absence of the foreign worker's disease drugs and pose a threat to the surrounding infectious diseases, as well as a certificate on the absence of the disease caused by the human immunodeficiency virus (HIV).
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
          Conditions for obtaining a work permit a foreign citizen 
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
       Upon receipt, you must have a passport and a power of attorney from the organization. 

Prior to the adoption of a work permit for a permit must submit:

the certificate on the absence of a foreign citizen of disease caused by the human immunodeficiency virus (HIV)
the inquiry about absence of addiction diseases and infectious diseases that pose a danger to others and are the basis for refusal to issue or revocation of the work permit in the Russian Federation: leprosy (Hansen's disease), tuberculosis, syphilis, hlamidiynayalimfogranulema, chancroid). 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a style="text-decoration:none" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Innovations from January 1, 2015
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
         Foreign citizen  when applying for a work permit is required to confirm the ownership of the Russian language, knowledge of Russian history and the foundations of the Russian Federation one of the following documents:

1) a certificate of proficiency in Russian, knowledge of Russian history and the foundations of the Russian Federation;

2) state documents on education (at the level not lower than the basic general education), issued by the educational institution in the state, was part of the Soviet Union, until September 1, 1991;

3) document on education and (or) of the qualifications issued to persons who have successfully passed the state final examination in the territory of the Russian Federation in September 1, 1991.

A foreign worker  in the implementation of employment of foreign worker must have a valid on the territory of the Russian Federation agreement (policy) of voluntary health insurance or have the right to receive medical care on the basis of the prisoner's employer or customer of works (services) from the medical organization for foreign workers paid medical services contract . The contract (policy) of voluntary health insurance or enclosed an employer or customer of works (services) from the medical organizations agreed to grant a foreign worker paid medical services should ensure the provision of a foreign employee of primary health care and specialized medical care in the emergency form.

The employer or customer of works (services),  attracting and using for employment of a foreign citizen shall be obliged to notify the territorial body of the federal executive authority in the field of migration in the region of the Russian Federation on the territory of which the foreign citizen to carry out labor activity, the conclusion and the termination (cancellation of ) with the foreigner a labor contract or a civil contract for works (services) within a period not exceeding three working days from the date of conclusion or termination (cancellation) of the corresponding contract.

This rule applies to all categories of foreign nationals engaged in labor activities, including:

- Highly qualified specialists;

- Foreign nationals sent to foreign commercial organization registered in the State - a member of the World Trade Organization, as well as:

- Foreign citizens engaged in labor activity without permits:

a) citizens of the Republic of Armenia, Belarus, Kazakhstan, the Kyrgyz Republic (12 August 2015);

b) foreign citizens engaged in labor activities in accordance with paragraph 4 of Article 13 of the Federal Law of 25.07.2002 № 115-FZ "On the Legal Status of Foreign Citizens in the Russian Federation."
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a style="text-decoration:none" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Documents required to obtain a permit for foreign workers
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
       For permission to hire foreign workers employer, customer of works (services), including the owner, or the person authorized by them shall submit to the Ministry of Internal Affairs of Russia or its territorial body of the following documents:

1.  Application to issue an employer or customer of works (services) permission to hire foreign workers.

The ship-owner for permission to hire foreign workers is in the Russian Interior Ministry statement for permission to hire foreign workers with the name, organizational-legal form, location, and phone - for a legal entity, the name, surname, patronymic, place of address residence and phone, data of identity document - for individual entrepreneur; number, citizenship of the State in which lives permanently or primarily attracted foreign workers, their profession (specialty), the name of the port of registration of vessels crews are supposed to use foreign workers, and of their use; the rationale for the use of foreign employees in the crews of ships (Annex 6 to the number of administrative regulations).

2. Copies of constituent documents for legal persons, or copy of the identity document of the individual entrepreneur.

3. The draft labor contract, the relevant legislation of the Russian Federation and the international treaties to which the Russian Federation, or other documents confirming preliminary agreement with foreign citizens or foreign partners about intention and conditions to attract foreign workers.


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