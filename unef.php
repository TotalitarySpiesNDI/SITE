<?php $context = "unef";
 include("liste_msg.php") ?>


<html>

	<title>Aide étudiant</title>
	
   <link rel="stylesheet" type="text/css" href="css/information.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
	<meta charset="utf-8">





<body>
<div id='cssmenu'>
<ul>
   <li><a href='index.php'>Accueil</a></li>
   <li class='active'><a href='information.php'>Information</a>
      <ul>
      
       
      </ul>
   </li>


<li class='active'><a>Aides Etudiants</a>
      <ul>
       
         </li>
         <li><a>Aides financières</a>
            <ul>
               <li><a href='erasmus.php'>Bourse ERASMUS</a></li>
               <li><a href='crous.php'>Bourse CROUS</a></li>
               <li><a href='ARS.php'>Allocation de rentré Scolaire </a></li>
               <li><a href='APL.php'>APL </a></li>
              
            </ul>
         </li>
          <li><a>Associations étudiants</a>
            <ul>
               <li><a href='unef.php'>Unef</a></li>
               <li><a href='FAG.php'>FAG</a></li>
             
              
            </ul>
         </li>
           
       
      </ul>
   </li>

  
 
   <li><a href='#'>Contact</a>
         <ul>

         </ul>
   </li>
</ul>
</div>

<div id="wrapper">
  <header>
    <h1>UNEF</h1>
  
  </header>
  <section>


    <h3>  Activités :  </h3>
    <h2>
      <span> 

 
Le syndicat étudiant UNEF, dont la fondation remonte à un siècle, est toujours actif et présent pour les étudiants par (notamment) les biais suivants :<p><p>
Défense des étudiants et de leurs droits. revendication de nouveaux droits (campagnes logement, étudiants étrangers, régime d'examen...).<br>
Ecoute, accompagnement et conseil des étudiants.<br>
Publications (Etudiants de France, guide des droits des étudiants, guide pratique de l'étudiant étranger en France, guide des étudiants salariés, listes noires des universités).<br>
Organisation d'évènements  (Festival étudiant contre le racisme, conférences...).<br>
Représentation des étudiants à toutes les instances universitaires et de l'enseignement supérieur (Conseils d'UFR, Conseils centraux de l'Université,CROUS, CNESER,...)
 </span>
    </h2>
    <div class="flex">

     
      <div class="col2">
        <h3>Qu'est-ce que l'UNEF ?</h3>
        <h2>
L'Union nationale des étudiants de France5 (UNEF) est une organisation étudiante représentative fondée en 19076. Elle est actuellement présente dans la quasi-totalité des universités de France. Elle se donne pour but de défendre les intérêts des étudiants, d'exprimer leurs opinions sur la gestion des infrastructures universitaires, que ce soit la recherche scientifique, la restauration universitaire, les logements étudiants. L'UNEF se considère et est considérée comme un syndicat étudiant. Durant plusieurs décennies, la tendance majoritaire est proche de la gauche socialiste. Aujourd'hui, elle affirme avoir pris ses distances avec le Parti socialiste.
          <p><p>
          </h2>

        
      </div>
    </div>

  </section>
  <form action="submitcomment.php" method="post">

  <input type="hidden" name="context" value="unef" />
     <label for="email">Mail</label>
    <input type="text" id="email" name="email" placeholder="mail">
 
    <input type="text" id="pseudo" name="pseudo" placeholder="pseudo">
 
  <label for="subject">Sujet</label>
  <input type="text" id="subject" name="subject" placeholder="subject">  

    <label for="msg">Message</label>
    <textarea id="msg" name="msg" placeholder="" style="height:200px"></textarea>
 
    <input type="submit" value="Valider">
 
 
    <input type="submit" value="Valider">
 
  </form>
</div>

<br>
<br><br>
 
<divc class="fin">
 <footer class="center bg-dark">
        <p>Totalitaries Spies  </a> &copy; 2019 </p>
    </footer>

</div>









	</body>
</html>