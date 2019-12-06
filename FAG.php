<?php $context = "FAG";
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
    <h1>FAG</h1>
  
  </header>
  <section>

    
    <h3>  Qu'est-ce que l'association FAG ?  </h3>
    <h2>
      <span> 

 Tout d'abord, il s'agit des initiales de "Fac Aix Gay", l'association  a pour vocation de regrouper les personnes, étudiantes ou non, tolérantes, ayant la même idée selon laquelle la diversité sexuelle existe et qu'il faut la respecter.<p><p>
"Fag" est l'abréviation du mot anglais "Faggot" qui veut dire "Tapette", un pied de nez un peu provoc' aux quelques insultes dont nous sommes trop souvent la cible.<p><p>
Cette association ne cherche  pas à faire un cercle fermé où seul les homos, en marge, se retrouveraient <
, se marginalisant alors un peu plus. L'association cherche à faire passer l'idée selon laquelle l'homosexualité n'est pas une maladie, que l'orientation sexuelle d'une personne ne regarde
qu'elle même. Nous devons alors nous ouvrir, intégrer tous et toutes pour montrer et faire comprendre que vivre heureux, vivre libre, sans insultes ni regards agressif est un droit,
et non pas se getthoiser, s'enfermer dans un communautarisme qui n'intègre pas et
semme l'incompréhension et cette intolérance que nous combattons...<p><p>
<p><p>
Nous concentrons nos effort sur trois axes principaux:<p><p>
--> Prévention: Journée contre le Sida début Décembre, distribution de préservatifs au quotidien lors de nos permanences et lors de toutes nos actions, prospectus; informations, en demandant un partenariat avec l'infimière de l'Université de Provence.<p><p>
--> Tolérance: Elaboration du calendrier contre l'homophobie disponible depuis début Décembre, la journée mondiale contre l'homophobie en Mai, que nous voudrions décliner en une semaine en partenariat avec des grands lieux Aixois, tel salon de thé, restaurant, librairie, organiser une conférence, intervenir en majorité sur l'Université de Provence.<p><p>
--> Divertissement* : organisations de soirées dans la région d'Aix-Marseille (soirées au Lust, spartacus, Happy...)<p><p>
* Fag est une association, pas un club de rencontre: aidez-nous à la faire vivre!

     Fag dispose d'un local avec accès à internet imprimante, médiathèque, boissons et coin détente, un endroit où se retrouver pour partager des moments agréables et des discussions drôles et/ou enrichissantes.
<p><p>
     Pour y adhérer il suffit de venir nous voir en B072 pendant les heures de permanence. nous vous demanderons quelques informations (nom, prénom, filière d'étude, adresse e-mail et numéro de téléphone...) ainsi qu'une cotisation de 5€ pour nous permettre de mener à bien nos activités. Il n'est pas obligatoire d'étudier à la fac de lettres pour s'inscrire, toutes les personnes exterieurs sont les bienvenues.<p><p>

        <i>Le but est de promouvoir le respect des différences, la liberté d'expression tout en respectant la vie privée de chacun.</i><p><p>

     
     Pourquoi une telle association, à l'heure du PACS, des plus ou moins bonnes émissions sur l'homosexualité,  et de la fâcheuse tendance de  certains people de trouver qu'être gay c'est in... parce que nous recevons régulièrement tag insultes et lettres anonymes, parce qu'un adolescent qui se découvre homo vit forcément cela avec difficulté autant personnellement que dans notre société, parce que même un adulte dans certaines sphères de sa vie ne peut vivre simplement son orientation sexuelle.<p><p>

Ces souffrances ainsi que ces comportements régressifs et pleins d'amalgames sont aujourd'hui notre raison d'être...
 </span>
    </h2>
    <div class="flex">

     
      <div class="col2">
        

  </section>
  <form action="submitcomment.php" method="post">

  <input type="hidden" name="context" value="nom_page" />
 
    <label for="email">email</label>
    <input type="text" id="email" name="email" placeholder="mail">
 
    <input type="text" id="pseudo" name="pseudo" placeholder="pseudo">
 
  <label for="subject">Message</label>
  <input type="text" id="subject" name="subject" placeholder="pseudo">  

    <label for="msg">Message</label>
    <textarea id="msg" name="msg" placeholder="" style="height:200px"></textarea>
 
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