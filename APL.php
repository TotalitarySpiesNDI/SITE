<?php $context = "APL";
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
    <h1>APL </h1>
  
  </header>
  <section>
    <h3>   </h3>
    <h2>
      <span> 
Les étudiants peuvent bénéficier d'une aide au logement (APL ou autre) pour les aider à payer leur loyer. Pour savoir s'ils sont éligibles à l'allocation logement et connaître son montant, ils peuvent utiliser un simulateur, qui tient compte de la baisse des APL entrée en vigueur en octobre 2017.  
 </span>
    </h2>
    <div class="flex">

     
      <div class="col2">
        <h3>APL étudiant : conditions d’attribution </h3>
        <h2>

Les conditions d’octroi des aides au logement aux étudiants ne varient que très peu des conditions générales exigées de tous. Les critères retenus pour le calcul du montant des aides personnalisées au logement (APL) sont, par exemple, les mêmes : niveau de ressources, montant du loyer, composition du foyer, localisation… De même, la méthode de calcul de l’aide est la même pour tous.<p><p>

Plus largement, tous les étudiants peuvent formuler une demande d’aide au logement auprès de la Caisse des allocations familiales (CAF). En effet, il n’existe pas de restrictions selon le type d’habitat (résidence étudiante, location privée…), l’âge de l’étudiant ou le type de diplôme poursuivi.<p><p>

L’attribution des APL n’est pas liée aux revenus des parents de l’étudiant. En revanche, les revenus des étudiants salariés peuvent être pris en compte dans le calcul. Il convient également de noter que les étudiants dont les parents sont soumis à l’impôt sur la fortune immobilière (IFI) n’ont pas accès aux aides au logement. Une exclusion calquée sur celle en vigueur jusqu’en 2017 selon laquelle les enfants de parents redevables de l’impôt de solidarité sur la fortune (ISF) ne pouvaient prétendre aux aides au logement.<p><p>

IMPORTANT :  les quelque 800.000 étudiants qui travaillent en plus de leurs études ne sont pas concernés par les nouvelles règles de calcul des aides personnalisées appelées à entrer en vigueur à partir du 1er janvier 2020.<p><p>

À SAVOIR : le fait de demander une aide au logement n’interdit pas le rattachement fiscal de l’étudiant au foyer de ses parents, sauf si ces derniers sont soumis à l’impôt sur la fortune immobilière (IFI). L’enfant qui perçoit des APL cesse toutefois d’être à charge de ses parents en ce qui concerne les prestations familiales (comme les allocations familiales), même s’il ne gagne pas sa vie et n’a pas dépassé l’âge limite.<p><p>

Enfin, les étudiants qui bénéficient d’une bourse universitaire ont également droit aux aides au logement.<p><p>

Pour aller plus loin : Tout savoir sur les conditions d’attribution des APL<p><p>

Quand faire sa demande d’APL quand on est étudiant<br><br>
Être admis à l’université, en classe préparatoire ou tout autre cursus de l’enseignement supérieur ne signifie pas qu’il faut immédiatement contacter la CAF concernant l’attribution des aides au logement. Le simple statut d’étudiant ne confère aucun droit particulier à cet égard.<p><p>

La demande d’APL doit être formulée au moment de l’emménagement dans la location explique la CAF sur son site internet. En effet, l’étudiant doit avoir signé son contrat de bail afin d’avoir les éléments nécessaires à son dossier, et en particulier… le bail de location : celui-ci doit être à portée de main pour remplir sa demande d’aide au logement, en ligne ou sur papier.

Outre le contrat de location, l’étudiant doit avoir à disposition :<p><p>

le montant du loyer (obligatoirement inscrit dans le bail)<br>
le montant de ses revenus des deux dernières années<br>
un relevé d’identité bancaire (RIB, format BIC/IBAN)<br>
le numéro d’allocataire de ses parents et leur CAF d’appartenance (s’ils sont allocataires)<br>
les coordonnées du bailleur (bailleur personne physique, agence immobilière, etc.), avec le numéro Siret pour les sociétés.<br>
Au moment de la demande, l’étudiant a la possibilité d’indiquer s’il loge dans une résidence ou une cité universitaire. Le nom de l’organisme gestionnaire devra être renseigné durant la démarche.
          <p><p>
          </h2>

        
      </div>
    </div>

  </section>
  <form action="submitcomment.php" method="post">

  <input type="hidden" name="context" value="APL" />
 
    <label for="email">Mail</label>
    <input type="text" id="email" name="email" placeholder="mail">
 
    <input type="text" id="pseudo" name="pseudo" placeholder="pseudo">
 
  <label for="subject">Sujet</label>
  <input type="text" id="subject" name="subject" placeholder="subject">  

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