<?php $context = "erasmus";
 include("liste_msg.php") ?>

<html>

	<title>Aide étudiant</title>
	
   <link rel="stylesheet" type="text/css" href="css/information.css">
   <link rel="stylesheet" type="text/css" href="css/forms.css">
	<meta charset="utf-8">





<body>
<div id='cssmenu'>
<ul>
   <li><a href='index.html'>Accueil</a></li>
   <li class='active'><a href='information.html'>Information</a>
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
    <h1>Bourse Erasmus</h1>
  
  </header>
  <section>
    <h3>  Bourse ERASMUS</h3>
    <h2>
      <span> 

        L'aide financière de la bourse ERASMUS l'avantage principale est bien sur les aides financières. liées au programme qui permettent à des étudiants n'ayant pas forcément les moyens de partir étudier à l'étranger dans le cadre de leurs études.

 

Les avantages financiers d'Erasmus sont doubles, non seulement l'étudiant ne paye pas les frais d'inscription à l'université dans le pays d'accueil, mais il reçoit en plus une bourse durant toute la durée de son séjour ! Le but avoué étant de permettre aux étudiants provenant de tous les milieux sociaux de partir étudier à l'étranger dans le cadre de leurs études. Mais voyons cela plus en détails !
 </span>
    </h2>
    <div class="flex">

     
      <div class="col2">
        <h3>La bourse d'études dans le cadre du programme Erasmus : </h3>
        <h2>La bourse est allouée à tous les étudiants partant dans le cadre du programme Erasmus. L’allocation est d’environ 180 euros par mois, mais peut varier selon les destinations et les choix d’allocation du budget par l’université française.
          Pour les étudiants déjà boursier, la bourse est maintenue et ils bénéficient d’une allocation supplémentaire de 400 euros par mois afin de permettre à tous de partir.
          <p><p>
          </h2>

         <h3>La gratuité des frais d'entrées dans une université étrangère</h3>
         <h2>
         Quelque soit l'université dans laquelle vous êtes accueillis, vous ne payez pas de frais d'entrées autres que les frais d'inscriptions à l'université française, qui tournent autour de 400 euros en 2011 ! Si dans certains pays comme l'Écosse, la différence est nulle, des pays comme l'Angleterre font payer près de 5000 euros par an à leurs étudiants, que les étudiants Erasmus ne payeront pas. Un autre moyen de rendre plus accessible les études à l'étranger.

 





<p><p>
</h2>
      </div>
    </div>

  </section>
  
</div>

<br>
<br><br>
 <form action="submitcomment.php" method="post">

  <input type="hidden" name="context" value="erasmus" />
 
    <label for="email">email</label>
    <input type="text" id="email" name="email" placeholder="mail">
 
    <input type="text" id="pseudo" name="pseudo" placeholder="pseudo">
 
  <label for="subject">Message</label>
  <input type="text" id="subject" name="subject" placeholder="pseudo">  

    <label for="msg">Message</label>
    <textarea id="msg" name="msg" placeholder="" style="height:200px"></textarea>
 
    <input type="submit" value="Valider">
 
  </form>
<divc class="fin">
 <footer class="center bg-dark">
        <p>Totalitaries Spies  </a> &copy; 2019 </p>
    </footer>

</div>









	</body>
</html>