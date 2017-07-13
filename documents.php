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
      <h1 class="text-center">Citizenship of the Russian Federation</h1>
      <p class="text-center" style="font-size: 20px;line-height: 1.7;">
       To obtain a Russian ctizenship, submit to the diplomatic mission or consular office of the Russian Federation, the following documents:
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
            <img class="thumbnail" src="pictures/Capture.PNG" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step Two</h4>
              <h4 class="subheading">Document of absence of crime</h4>
            </div>
            <div class="timeline-body">
              <p>
                  Provide a document which proofs absence of complicity in any type of crime
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
               medical insurance policy valid on the territory of the Russian Federation
              </p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <img class="thumbnail" src="pictures/zayavleniye_na_gra.JPG" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step Four</h4>
              <h4 class="subheading">Application form</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
              Fill the application form with a photo<br><a href="documents/for_citizenship.rtf">Click here to download the form</a><br>
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
          Terms, conditions, procedure for acquisition and termination of citizenship of the Russian Federation 
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
       Terms, conditions and procedure for acquisition and termination of citizenship of the Russian Federation determined  by the Federal Law of May 31, 2002 № 62-FZ "On Citizenship of the Russian Federation"  and the Regulations on the procedure of consideration of issues of citizenship of the Russian Federation, approved by Presidential Decree of 14 November 2002 . number 1325  .

The order of execution of the state function to identify the presence of Russian citizenship, the acquisition or termination of Russian Federation citizenship, agreement or rejection or cancellation on citizenship solutions, accounting entities who have changed nationality, as well as the requirements for order execution state function, the timing and sequence of actions (administrative procedures) of the Federal migration service and the territorial bodies of the Russian Interior Ministry, the procedure and forms of control over the execution of the state functions, procedures of appeal (or inaction) of an official, or its decisions, as well as the interaction of Ministry of Internal Affairs of Russia, its territorial bodies and their structural subdivisions with federal executive authorities, executive authorities of the Russian Federation, local governments in the implementation of these powers, sets the   Administrative regulations of the Federal migration service of the state function to implement the powers in the implementation of legislation of the Russian Federation citizenship , approved by order of the Federal migration service of Russia on March 19, 2008 №64 (ed. from 29.04.2010)

Citizenship of the Russian Federation may be acquired in accordance with Article 11 of the Federal Law:

by birth;
as a result of receiving Russian citizenship in a general manner;
as a result of receiving Russian citizenship in a simplified manner;
as a result of the recovery in the Russian Federation citizenship;
as well as on other grounds provided by this Federal Law or the international treaties of the Russian Federation.
General and simplified manner different terms, conditions, terms of consideration of materials (in general order - within 1 year, and simplified - to 6 months from the date of submission of all necessary and properly executed documents) and the competence to make a decision. In general, the order decided by the President of the Russian Federation in the simplified - the heads of territorial bodies of the Ministry of Interior of Russia on subjects of the Russian Federation. There are no quotas for Russian citizenship there. Emptive right to acquire the citizenship of the Russian Federation on the grounds of social, racial, national, linguistic or religious affiliation is not established.

Admission  to the Russian citizenship in the general procedure established by Article 13 of the Federal Law . One of the main conditions is the permanent residence on the territory of Russia (ie residence permit) for 5 years continuously. Period of residence is reduced to 1 year, or removed this condition in general for certain categories of foreigners, set the same article.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a style="text-decoration:none" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Admission to the Russian citizenship in a simplified manner
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
Implemented on the grounds established for certain categories of persons in Article 14 of the Federal Law. At the same time for them lifted the requirement of permanent residence in Russia (but not a condition to have a residence permit, with the exception of those referred to in paragraphs 3,5,6 and 7 of this article). In accordance with Article 14 in the simplified procedure may be adopted Russian citizenship in the face:

having at least one parent who has Russian citizenship and residing in the territory of the Russian Federation (item "a" of Part 1 of Article 14);
living and residing in countries that were part of the USSR who have not acquired citizenship of these states stateless former Soviet citizens (paragraph "b" of part 1 of Article 14);
born in the territory of the RSFSR and had the nationality of the former Soviet Union (point "a" of Part 2 of Article 14);
residing in the Russian Federation and are married to a citizen of the Russian Federation at least three years (paragraph "b" of Part 2 of Article 14);
are disabled and able-bodied adults with children - citizens of the Russian Federation (item "c" of part 2 of Article 14);
have a child who is a citizen of the Russian Federation - in case the other parent of the child who is a citizen of the Russian Federation, has died, or a court decision which has entered into force, declared missing, incapable or limited in capacity, deprived of parental rights or restricted in parental Rights (paragraph "d" of part 2 of stati14);
have a son or daughter under the age of eighteen years who are Russian citizens, and the court decision which has entered into force, recognized as incapable or limited in capacity, - if the other parent of these citizens of Russian Federation, a citizen of the Russian Federation, has died or the decision Court entered into force, declared missing, incapable or limited in capacity, deprived of parental rights or restricted in parental rights (paragraph "d" of part 2 of article 14);
received after July 1, 2002 vocational training on the basic professional educational programs, state-accredited, educational or Russian scientific organizations in its territory and carry out labor activity in the Russian Federation in the aggregate not less than three years before the date of the application for citizenship Russian Federation (paragraph "e" of part 2 of article 14);
individual entrepreneurs and conducting business in the Russian Federation at least three years preceding the year of filing an application for admission to the citizenship of the Russian Federation, and in this period of their annual revenues from sales of goods (works, services) as a result of business activities in the established by the Government Russian types of economic activity is not less than 10 million rubles (paragraph "g" of part 2 of article 14);
are investors, whose share contribution to the authorized (share) capital of a Russian legal entity carrying out activities on the territory of the Russian Federation in the Russian Federation established by the Government of the types of economic activities, is not less than 10 percent. The amount of the authorized (share) capital of such entity and the size of its net assets must not be less than 100 million rubles each, or the amount paid by such entity tax to the budget of the Russian Federation and mandatory insurance payments system should be at least 6 million rubles per year for at least three years from the date of investment (point "h" part 2 of article 14);
exercising at least three years before the date of filing an application for admission to the citizenship of the Russian Federation of labor activity in the Russian Federation by profession (specialties, positions), included in the list of professions (specialties, positions) of foreign citizens -kvalifitsirovannyh professionals eligible to receive a citizenship Russian Federation under the simplified procedure, approved by the federal body of executive authority responsible for the development and implementation of state policy and normative legal regulation in the sphere of employment and unemployment (para "and" part 2 of article 14);
disabled persons, who arrived to the Russian Federation from the states that were part of the USSR, and the registered place of residence in the Russian Federation as of July 1, 2002 (Part 3 of Article 14);
veterans of the Great Patriotic War (Part 5 of Article 14);
children and incapacitated persons (article 14, part 6);
with registered residence on the territory of the Russian Federation subject chosen by them for permanent residence in accordance with the State program to assist the voluntary resettlement to the Russian Federation of compatriots living abroad (Part 7 of Article 14).
For carriers of the Russian language
In addition, citizens of Kazakhstan, Kyrgyzstan and Belarus may acquire citizenship of the Russian Federation on the territory of the Russian Federation is also  a simplified procedure in accordance with the international treaties concluded by the Russian Federation with the states concerned. The procedure for considering applications for admission to the citizenship of the Russian Federation reduced and is three months from the date of submission of all necessary and properly executed documents.

Under Part 1 of Article 32 of receiving applications for Russian citizenship in respect of persons  residing outside the Russian Federation , carried out diplomatic missions or consular institutions of the Russian Federation abroad (only the norms of Part 1 and 6 of Article 14, paragraph 2 and 3 of Article 19 , part 3 of article 26). Applications for citizenship from persons residing in the territory of Russia, taking the territorial bodies of the Russian Interior Ministry in the place of residence of the applicant (in the vast majority of cases, the residence permit).

Of particular note are the conditions of admission to Russian citizenship established by paragraphs "c", "d" and "e" of Part 1 of Article 13:

- The availability of legitimate livelihoods;

- Appeal to the authority of a foreign state, a statement to renounce the existing nationality in other entities;

- Russian language skills.

In addition, the acquisition of Russian citizenship to the territorial body of the Russian Interior Ministry informs the diplomatic mission or consular post of a foreign state.

Appropriate specific grounds the acquisition of Russian citizenship  forms of application forms, rules and procedures for their registration, filing and review, as well as lists of attached documents , established by the Regulations on the procedure of consideration of issues of citizenship of the Russian Federation.

For the consideration of applications for citizenship shall be paid  the state fee  in the amount of 3500 rubles. The state fee is not paid only for admission to Russian citizenship to stateless persons who had citizenship of the USSR, living and residing in the states that were part of the Soviet Union, but have not received citizenship of these states, as well as admission to the citizenship of the Russian Federation, orphans and children without parental care. It is set in accordance with the amended  Federal Law of 05.04.2010, № 41-FZ ,  the Federal Law of 21.07.2014, № 221-FZ  , and Chapter 25.3 of Part II of the Tax Code of the Russian Federation.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a style="text-decoration:none" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Where to go to apply for citizenship of the Russian Federation.
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">

The provisions of Article 32 of the Federal Law of May 31, 2002 № 62-FZ "On Russian Federation Citizenship" established that a resident in the territory of the Russian Federation, the statement on the citizenship of the Russian Federation and the documents necessary for the acquisition of Russian citizenship, served in territorial body of the Federal migration service at the place of residence of the applicant.

Application for Change of citizenship of a child or incapacitated person is fed by their parents or other legal representatives of the applicant's place of residence or the place of residence of the child or incapacitated person.

A person residing outside the Russian Federation and not having a residence in the territory of the Russian Federation - to the diplomatic mission or consular office of the Russian Federation outside the Russian Federation.

For more information on this subject can be obtained in the territorial division of the Federal Migration Service of Russia in the place of residence of the applicant.

What documents should be submitted when applying for the acquisition of citizenship of the Russian Federation?

The list of information and the necessary documents referred to in the statement about the possibility of being granted citizenship of the Russian Federation is determined by the Regulations on the procedure of consideration of issues of Russian Federation citizenship, approved by Presidential Decree of 14  on November  2002  , № 1325, depending on the specific grounds for the acquisition or termination of citizenship of the Russian Federation.

For more information on this subject can be obtained in the territorial division of the Federal Migration Service of Russia in the place of residence of the applicant.

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