<?php  include('./dbconnect.php');
session_start();

// echo $_SESSION['id'];
if(isset($_SESSION['useremail'])) {
    $user_id = $_SESSION['id'];
    $profile = "SELECT * from tbl_users where (user_id='$user_id') AND (userrole='user') ";
    $result = $con->prepare($profile);
    $result->execute();  
	echo "session start() ";
}

$sql = "SELECT * from tbl_abn";
$data = $con->prepare($sql);
$data->execute();

$sql2 = "SELECT * from tbl_reservation r,tbl_users u where (r.telephone=u.userphone) AND (r.stats='success') AND (u.user_id='$user_id')";
$find = $con->prepare($sql2);
$find->execute();


?>



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Perfect Body</title>
        <link rel="stylesheet" href="./css/aniimate.css">
    

	<link rel="stylesheet" type="text/css" href="./csss/style.css">
    
    
	<script src="https://kit.fontawesome.com/9bb6ccdf9b.js"  
 crossorigin="anonymous">
</script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
      
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .wow:first-child {
      visibility: hidden;
    }
        </style>
    </head>
    <body>
    <!-- Start Header  -->
 <header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="">Perfect <span>Body</span></a>
 	 	</div>
		  <?php  if(isset($_SESSION['useremail'])) {
			    
                foreach($result as $row) {  $lougout = true; ?>
		  <div class="notif-container">
			  <div class="notif-box-1">
			   <h2 style="color:#fff"><?php echo $row['username'] ?></h2>
			   <i class="fas fa-bell notif" > <?php foreach($find as $row) { if($row['stats'] =='success') {   ?> <span class="span">1</span> <?php }} ?> </i>
				</div>
			  <div class="cancelContainer">
			    <p style="color:#fff">votre demande ?? ??t?? approuv??</p>
			  </div>
		  </div>
		  <?php }}?>
 	 	<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>	
 	       <span></span>
 	 	</a>
 	 	<div class="nav">
 	 		<ul>
 	 			<li><a href="#home">Accueil</a></li>
 	 			<li><a href="#service">Services</a></li>
				<li><a href="#materiel">Mat??riel</a></li>
                <li><a href="#classes">Coachs</a></li>
 	 			<li><a href="#schedule">Planning</a></li>
 	 			<li><a href="#price">Abonnements</a></li>
 	 			<li><a href="#contact">Contact</a></li>
				  <?php if(isset($lougout)) {  ?>
 	 			<li><a href="./logout.php">Logout</a></li>
				  <?php }?>
               
 	 		</ul>
 	 	</div>
 	 </div>
 </header>
 <!-- End Header  -->

  <!-- Start Home -->
  <section class="home wow flash" id="home">
  	 <div class="container">
  	 	  <h1 align="center" class="wow slideInLeft" data-wow-delay="1s">C'EST L'HEURE DU <span>gym</span>.ALLONS-Y NOUS SOMMES PR??TS  </h1>
  	 	  <h1 align="center" class="wow slideInRight" data-wow-delay="1s"><span>?? VOUS ADAPTER</span> </h1>
		<h1 class="wow slideInRight" data-wow-delay="1s"> </h1>
  	 </div>
  	  <!-- go down -->
  	      <a href="#about" class="go-down">
  	      	  <i class="fa fa-angle-down" aria-hidden="true"></i>
  	      </a>
  	  <!-- go down -->

  </section>
  <!-- End Home -->


 <!-- Start About -->
  <section class="about" id="about">
  <h4 class="texte-align">Avec Perfect Body, am??liore ta condition physique, tonifie ton corps et d??veloppe ta masse musculaire. Gr??ce ?? des espaces adapt??s sur plus de 1000m??, fa??onne tes entra??nements ?? la perfection :</h4>
  	  <div class="container">
  	  	  <div class="content">
  	  	  	   <div class="box wow bounceInUp">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/space3.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>UN ESPACE SPACIEUX ET LUMINEUX POUR LES COURS COLLECTIFS </h4>
							  <p>Les cours collectifs de Perfect Body regroupent plusieurs formats d???activit??s et diff??rentes m??thodes d???exercices.</p>
                       	   <p> Zumba, Yoga </p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   	<div class="box wow bounceInUp" data-wow-delay="0.2s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/materiel.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>L'ESPACE MUSCULATION ET CARDIO TRAINING</h4>
                       	   <p>Chez Perfect Body, tes entra??nements sont notre priorit?? quel que soit ton niveau. Nous proposons les meilleures solutions et produits du march?? </p>
                           <p> (tapis de course, rameur, v??los elliptiques, etc.).</p>
					   </div>

  	  	  	   	   </div>
  	  	  	   </div>

					 <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/nut.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>DI??T??TICIENS-NUTRITIONNISTES</h4>
                       	   <p>Le nutritionniste sportif a pour mission principale de suivre l'alimentation d'athl??tes de tous niveaux. Son r??le est de s'assurer que le sportif ait une hygi??ne alimentaire saine et suive le r??gime le plus adapt?? ?? son activit?? physique et ses objectifs. Quantit?? d'aliments par repas, choix de produits...</p>
							  

                       </div>
  	  	  	   	   </div>
  	  	  	   </div>	 
		    </div>	 
  	  	  </div>
  	  </div>
		<div class="container">
  	  	  <div class="content">
  	  	  	   <div class="box wow bounceInUp">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/parcking.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>UN PARCKING </h4>
						 <p> Un parking couvert et gard?? est mis ?? votre disposition gratuitement.</p>
						   
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   	<div class="box wow bounceInUp" data-wow-delay="0.2s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/halt.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>HALTE-GARDERIE ET UNE CAF??T??RIA</h4>
                       	   <p>Chez Perfect Body, nous savons que la famille est importante. Nous offrons donc un service de garderie GRATUIT pour vous permettre de prendre du temps pour vous au gym tout en offrant un espace s??curitaire et amusant pour vos enfants et une caf??t??ria.</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	
				<div class="box wow bounceInUp" data-wow-delay="0.4s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/piscin.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>PISCINE</h4>
                       	   <p>Faire de l???exercice dans l???eau est id??al pour entretenir votre forme physique et se maintenir en bonne sant??.</p>
							  

                       </div>
  	  	  	   	   </div>
  	  	  	   </div> 	 
		    </div>	 
  	  	  </div>
		</div>
  </section>
 <!-- End About -->


 <!-- Start Service -->
 <section class="service" id="service">
 	<div class="container">
 		 <div class="content">
 		 	  <div class="text box wow slideInLeft">
                  <h2>Services</h2>
                  <p>Les activit??s sportives apportent beaucoup de bienfaits pour l???organisme. Pratiquer un exercice physique quotidien permet de rallonger l???esp??rance de vie, sans oublier l???effet imm??diat du sport qui permet de lib??rer de l???endorphine dans le corps et procure la sensation de bien-??tre. Outre la sant??, les motivations qui nous poussent ?? s???inscrire dans un club de sport sont multiples et peuvent ??voluer au fur et ?? mesure de notre implication dans les programmes d???entrainement : remise en forme, prise de masse, perte de poids, endurance, r????ducation???</p>
                 
                  <!-- go down -->
  	      <a  class="go-down">
  	      	  <i class="fa fa-angle-down" aria-hidden="true"></i>
  	      </a>
  	  <!-- go down -->
 		 	  </div>
 		 	  <div class="accordian box wow slideInRight">
 		 	  	    <div class="accordian-container active">
 		 	  	    	<div class="head">
 		 	  	    		<h4>MUSCULATION</h4>
 		 	  	    		<span class="fa fa-angle-down"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>La musculation est une discipline qui vise ?? d??velopper et ?? entretenir la masse musculaire des pratiquants par le biais d???exercices physiques. Elle permet d???accroitre le volume musculaire, la force, l???endurance, la puissance, l???explosivit?? et la r??sistance du corps. La musculation est l?????l??ment central de plusieurs sports comme le culturisme ou l???halt??rophilie par exemple. Elle constitue ??galement une part de la pr??paration physique pour les athl??tes, notamment de haut niveau, qui ont besoin d???une solide condition physique pour maximiser leurs performances. La musculation peut ??tre ??galement utilis??e par des m??thodes plus douces comme le fitness, le stretching ou dans le cas de soins m??dicaux comme la kin??sith??rapie ou la r????ducation.</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>CARDIO TRAINING</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>L???entra??nement cardio vasculaire est une discipline qui permet aux pratiquants de travailler leur endurance et d???am??liorer leurs performances cardiaques. Pour y parvenir, il est n??cessaire de r??partir l???effort physique sur la dur??e et d???opter pour une intensit?? d???exercice plut??t moyenne afin d?????tre capable de tenir le rythme. Tapis, v??los, elliptiques, rameurs, corde ?? sauter??? Fitness Park met ?? la disposition de ses adh??rents tout le mat??riel n??cessaire pour les exercices cardio vasculaires. Le cardio training est ??galement int??ressant pour les sportifs qui sont en p??riode de s??che ou les personnes d??sirant perdre du poids car il permet d???augmenter les d??penses caloriques journali??res.</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>LA NATATION</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Nage sportive, aquagym, jeux collectifs, nombreuses sont les activit??s sportives que nous pouvons pratiquer dans une piscine. Faire de l???exercice dans l???eau est id??al pour entretenir votre forme physique et se maintenir en bonne sant??. Vous tonifiez l???ensemble de votre corps, am??liorez vos capacit??s cardiovasculaires et respiratoires, ceci en limitant l???impact sur les articulations.

La piscine est aussi une solution ludique pour inciter les enfants ?? pratiquer une activit?? sportive r??guli??re : aqua-volley, polo course contre la montre, etc. Autant d'occasions de passer des moments inoubliables en famille tout en se d??pensant !</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>COURS COLLECTIFS</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Les cours collectifs de Fitness Park regroupent plusieurs formats d???activit??s et diff??rentes m??thodes d???exercices. Chacun d???entre eux permet d???atteindre des objectifs diff??rents. D??pense calorique, perte de poids, musculation, force, endurance, tonicit?? du corps??? Tu trouveras toujours un cours qui permet de r??pondre ?? ton besoin(zumba, yoga..).</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  </div>
 		 </div>
 	</div>
 </section>
 <!-- End Service -->
 <!-- Start Gallery -->
 <section class="gallery" id="gallery">
  	 <h2>Galerie d'entra??nement</h2>
  	<div class="content">
  		 <div class="box wow slideInLeft">
  		 	 <img src="images/musculation.jpeg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img src="images/cardio1.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInLeft">
  		 	 <img src="images/natation.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img src="images/zumba.jpg" alt="gallery" />
  		 </div>
		   <div class="box wow slideInRight">
  		 	 <img src="images/yoga1.jpg" alt="gallery" />
  		 </div>
		   <div class="box wow slideInRight">
  		 	 <img src="images/yoga2.jpeg" alt="gallery" />
  		 </div>
  	</div>
  </section>
<!-- End Gallery -->
<!--Mat??riel-->
<section class="materiel-package" id="materiel">
  	 <div class="container">
  	 	  <h2>MAT??RIEL</h2>
  	 	  <p class="title-p"> Chez Perfect Body, tes entra??nements sont notre priorit?? quel que soit ton niveau.

Pour te permettre de te surpasser ?? chaque s??ance, notre salle ??quip??e de mat??riel et ??quipements sportifs de qualit?? derni??re g??n??ration sur l???ensemble des espaces.

Nous proposons les meilleures solutions et produits du march?? gr??ce ?? nos partenaires machines tels que Technogym ou Hammer Strenght, ainsi que nos partenaires fitness comme la boisson sportive Yanga Sports Water ou les cours cr????s par LesMills et Radical Fitness, pour que chacun de tes passages Perfect Body soit la meilleure exp??rience fitness qui soit.</p>
  	 	  <div class="content">
  	 	  	  <div class="box wow bounceInUp">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/machine1.png" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Cage a squat - Body Solid Full options GPR400FO</h3>
  	 	  	  	  	   	  <p>Cage ?? squat et tractions de qualit?? sup??rieure avec toutes les options. Jusqu'?? 20 exercices de bases et 50 avec les diverses versions</p>
  	 	  	  	  	   	  
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.2s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	  
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/machine2.png" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Station musculation - Kettler - Multigym plus</h3>
  	 	  	  	  	   	  <p>Mod??le ??conomique non adapt?? ?? une utilisation intensive en collectivit??s. Une utilisation sous la surveillance des enseignats est n??cessaire.</p>
  	 	  	  	  	   	  
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/machine3.png" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Tour 4 postes LAROQ Tannac</h3>
  	 	  	  	  	   	  <p>Station 4 postes de gamme professionnelle o?? 4 personnes peuvent travailler en m??me temps les membres sup??rieurs (dorsaux, biceps, triceps) et les membres inf??rieurs (adducteurs, abducteurs, fessiers) dans diff??rentes postures.</p>
  	 	  	  	  	   	  
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  </div>
			 <div class="content">
  	 	  	  <div class="box wow bounceInUp">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/machine4.png" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>V??lo semi-allong?? - Kettler Tour 600R</h3>
  	 	  	  	  	   	  <p>V??lo semi-allong?? pour avoir le dos cal??, permettant un travail de r??gularit?? sans sollicitation particuli??re du dos.</p>
  	 	  	  	  	   	  
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.2s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	  
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/m5.png" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Tapis de course BH LK 6000 Hi Power Gamme pro</h3>
  	 	  	  	  	   	  <p>Tapis de course LK6000 de chez BH Fitness Hi-Power avec moteur de 4.0 CV silencieux et fiable.Vitesse r??glable de 0,8 ?? 22 km/h dans un grand silence.</p>
  	 	  	  	  	   	  
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/m6.png" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Rameur RW1000 Movemia by - BH Hi-Power - Gamme Pro</h3>
  	 	  	  	  	   	  <p>Rameur proche du mouvement en aviron. Sans alimentation, autog??n??r??. 20 niveaux de r??sistance.</p>
  	 	  	  	  	   	  
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  </div>
			 <div class="content">
  	 	  	  <div class="box wow bounceInUp">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/m7.png" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Rack halt??res - Sveltus</h3>
  	 	  	  	  	   	  <p>Rack de rangement pour halt??res Sveltus, pratique pour les salles ou clubs de fitness, il peut accueillir plus de 30 paires d'halt??res.</p>
  	 	  	  	  	   	  
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.2s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	  
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/m8.png" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Balle fitball antiburst Casal Sport</h3>
  	 	  	  	  	   	  <p>Permet de r??aliser de nombreux exercices, aussi bien des exercices d'??quilibre, de renforcement, d'??tirement. 3 diam??tres : 55 cm, 65 cm, 75 cm.</p>
  	 	  	  	  	   	  
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/m9.png" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Natte pliable fitness ou yoga Sveltus</h3>
  	 	  	  	  	   	  <p>Natte pliable et confortable poign??e int??gr??e, pliable en 4.</p>
  	 	  	  	  	   	  
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  </div>
  	 </div>
  </section>

<!-- Start Classes -->
<section class="classes" id="classes">
	<div class="container">
     
		 <div class="content">
		      <div class="box img wow slideInLeft">
		 	  	 <img src="images/coachs.jpeg" alt="classes" />
					<img src="images/coachs3.jpg" alt="classes" />
					<img src="images/coachs4.jpg" alt="classes" />
					<img src="images/coachs5.jpg" alt="classes" />

		 	  </div>
		 	  <div class="box text wow slideInRight">
		 	  	 <h2>COACHS</h2>
		 	  	 <p>Que tu cherches ?? gagner du muscle, ?? am??liorer ton cardio, ou simplement ?? reprendre le sport, nos ??quipes ont plus d'un tour dans leurs sacs pour te faire transpirer et progresser !</p>
		 	  	<div class="class-items">
				 <div class="item wow bounceInUp">
				   <div class="item-text">
                     	  <h4>Stephen Foster</h4>
                     	  <p>coach sportif et educateur physiquep tr??s professionnel,diplom?? d'??tat j'ai un master domain ( staps) je propose mes services pour ceux qui sont aim?? ameliorer leur physique ( pr??paration du syst??me cardio-vasculaire ), leur corps par differentes</p>
      <p> Coach de musculation et cardio </p>
	                       </div>
                     <div class="item-img">
                     	 <img src="images/coach1.jpg" alt="classes" />
                     	 
                     </div>
</div>
		 	  	 
					<div class="item wow bounceInUp">
                     <div class="item-img">
                     	 <img src="images/coach4.jpg" alt="classes" />
                     	 
                     </div>
                     <div class="item-text">
                     	  <h4>Aurora Sekine</h4>
                     	  <p>coach sportive cardio fitness musculation diplom?? d'un diplome international en aerofitness et combat fitness, self defense sp??cialement pour femmes</p>
						   <p> Coach de musculation et cardio </p>
                     </div>
		 	  	 </div> 
         
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-img">
                     	 <img src="images/coach3.jpg" alt="classes" />
                     	 
                     </div>
                     <div class="item-text">
                     	  <h4>Ben Palocko</h4>
                     	  <p>Entraineur de natation dipl??m?? ;plus de 10 ans d exp??rience,champion d'algerie comme  entraineur en nage avec palmes"mostaganem2019" donne cour de natation  et la nage avec palmes pour d??butant ou performance</p>
						   <p> Coach de natation </p>
                     </div>
		 	  	 </div>
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-text">
                     	  <h4>Andi Nguyen</h4>
                     	  <p>jeune femme d alger dipl??m??e en sciences sportives comme coach de fintess. aerobic et zumba</p>
						   <p> Coach de yoga et zumba </p>
                     </div>
                     <div class="item-img">
                     	 <img src="images/coach2.jpg" alt="classes" />
                     	 
						  
                     </div>
					 
		 	  	 </div>
		 	  	</div>
				   

	</div>
</section>
<!-- End Classes -->



<!-- Start Schedule -->
  <section class="schedule" id="schedule">
  	 <div class="container">
  	 	  <div class="content">
  	 	  	   <div class="box text wow slideInLeft">
  	 	  	   	   <h2>Planning</h2>
  	 	  	   	   <p> D??couvrez le planning des cours collectifs de fitness  	 	  	   	   </p>
  	 	  	   	   <img src="images/planning.png" alt="schedule" />
  	 	  	   </div>
  	 	  	   <div class="box timing wow slideInRight">
                   <table class="table">
                   	 <tbody>
						<tr >
                   	 		<td  class="day">Dimanche</td>
                   	 		<td><strong>9:00 h</strong></td>
                   	 		<td>Natation<br/> 9:00 ?? 10:30 h</td>
                   	 		<td>num salle:1</td>
                   	 		<td>Musculation <br/> 10:30 ?? 12 h</td>
                   	 		<td>num salle:2</td>
								<td><strong>13 h</strong></td>
                   	 		<td>Yoga <br/> 13 ?? 14:30 h</td>
                   	 		<td>num salle:3</td>
								<td>Cardio <br/> 14:30 ?? 15 h</td>
                   	 		<td>num salle:4</td>
								
                   	 	</tr>
                   	 	<tr >
                   	 		<td  class="day">Lundi</td>
                   	 		<td><strong>9:00 h</strong></td>
                   	 		<td>Cardio<br/> 9:00 ?? 10:30 h</td>
                   	 		<td>num salle:4</td>
                   	 		<td>Zumba <br/> 10:30 ?? 12 h</td>
                   	 		<td>num salle:2</td>
								<td><strong>13 h</strong></td>
                   	 		<td>Natation <br/> 13 ?? 14:30 h</td>
                   	 		<td>num salle:1</td>
								<td>Cardio <br/> 14:30 ?? 15 h</td>
                   	 		<td>num salle:4</td>
								
                   	 	</tr>
                   	 	<tr >
                   	 		<td class="day">Mardi</td>
                   	 		<td><strong>9:00 h</strong></td>
                   	 		<td>Piscine<br/> 9:00 ?? 10:30 h</td>
                   	 		<td>num salle:1</td>
                   	 		<td>Musculation <br/> 10:30 ?? 12 h</td>
                   	 		<td>num salle:2</td>
								<td><strong>13 h</strong></td>
                   	 		<td>Yoga <br/> 13 ?? 14:30 h</td>
                   	 		<td>num salle:3</td>
								<td>Cardio <br/> 14:30 ?? 15 h</td>
                   	 		<td>num salle:4</td>
								
                   	 	</tr>
                   	 		<td class="day">Mercredi</td>
                   	 		<td><strong>9:00 h</strong></td>
                   	 		<td>Piscine<br/> 9:00 ?? 10:30 h</td>
                   	 		<td>num salle:1</td>
                   	 		<td>Musculation <br/> 10:30 ?? 12 h</td>
                   	 		<td>num salle:2</td>
								<td><strong>13 h</strong></td>
                   	 		<td>Yoga <br/> 13 ?? 14:30 h</td>
                   	 		<td>num salle:3</td>
								<td>Cardio <br/> 14:30 ?? 15 h</td>
                   	 		<td>num salle:4</td>
								
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">jeudi</td>
                   	 		<td><strong>9:00 h</strong></td>
                   	 		<td>Piscine<br/> 9:00 ?? 10:30 h</td>
                   	 		<td>num salle:1</td>
                   	 		<td>Musculation <br/> 10:30 ?? 12 h</td>
                   	 		<td>num salle:2</td>
								<td><strong>13 h</strong></td>
                   	 		<td>Yoga <br/> 13 ?? 14:30 h</td>
                   	 		<td>num salle:3</td>
								<td>Cardio <br/> 14:30 ?? 15 h</td>
                   	 		<td>num salle:4</td>
								
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Vendredi</td>
                   	 		<td><strong>9:00 h</strong></td>
                   	 		<td>Piscine<br/> 9:00 ?? 10:30 h</td>
                   	 		<td>num salle:1</td>
                   	 		<td>Musculation <br/> 10:30 ?? 12 h</td>
                   	 		<td>num salle:2</td>
								<td><strong>13 h</strong></td>
                   	 		<td>Yoga <br/> 13 ?? 14:30 h</td>
                   	 		<td>num salle:3</td>
								<td>Cardio <br/> 14:30 ?? 15 h</td>
                   	 		<td>num salle:4</td>
								
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Samedi</td>
                   	 		<td><strong>9:00 h</strong></td>
                   	 		<td>Piscine<br/> 9:00 ?? 10:30 h</td>
                   	 		<td>num salle:1</td>
                   	 		<td>Musculation <br/> 10:30 ?? 12 h</td>
                   	 		<td>num salle:2</td>
								<td><strong>13 h</strong></td>
                   	 		<td>Yoga <br/> 13 ?? 14:30 h</td>
                   	 		<td>num salle:3</td>
								<td>Cardio <br/> 14:30 ?? 15 h</td>
                   	 		<td>num salle:4</td>
								
                   	 	</tr>
                   	 </tbody>
                   </table>
  	 	  	   </div>
  	 	  </div>
  	 </div>
  </section>
<!-- End Schedule -->



 <!-- Start Price -->
  <section class="price-package" id="price">
  	 <div class="container">
	   <h2> Faire Votre R??servation </h2>
  	 	<p class="title-p">Trouve facilement l'abonnement qui te convient !! N'attends pas demain pour profiter de la meilleure offre, pour faire une r??servation vous voulez juste cliquez sur la photo de l'offre et remplir le formulaire ! </p>
  	 	  <div class="content" >
				 <?php foreach($data as $row)  { ?>
  	 	  	 <div class="box wow bounceInUp" >
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   	 <?php echo $row['prix'] ?>
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   <a href="./reservation.php?id=<?php echo $row['abn_id'] ?> "><img src="images/price1.jpg" alt="price" /></a>
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
							<h3><?php echo $row['titre'] ?> </h3>
  	 	  	  	  	   	  <p><?php echo $row['description'] ?></p>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
				   <?php } ?>
  	 	  
  	 	  
  	 	  </div>
  	 </div>
  </section>
 <!-- End Price -->

 <!-- Start Contact -->
  <section class="contact" id="contact">
     <div class="container">
        <div class="content">
            <div class="box form wow slideInLeft">
		<form action="login.php" method="post">
  

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="email" placeholder="Enter email" name="txtemail" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="txtpassword" required>

    <button type="submit" name="btn_login">Login</button>
      <p>not Registred?</p><a href="./registration.php">Sign In</a>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    
  </div>
</form>
            </div>
            <div class="box text wow slideInRight">
                 <h2>Connectez-vous avec Perfect Body</h2>
				 <p class="title-p">Si vous souhaitez contacter le service client de Perfect Body par t??l??phone pour obtenir des informations, appelez le num??ro ci-dessous ou envoyez une question par e-mail.</p>
                  <div class="info">
                      <ul>
                          <li><span class="fa fa-map-marker"></span> Route Hydraulique, M'sila</li>
                          <li><span class="fa fa-phone"></span> 0550 27 14 03</li>
                          <li><span class="fa fa-envelope"></span> perfectbody@gmail.com</li>
                      </ul>
                  </div>
                  
                  

                  
            </div>
        </div>
     </div>
  </section>
 <!-- End Contact -->



 <!-- jquery -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){
       
        $(".nav").toggleClass("open")

        $(".ham-burger").toggleClass("active");
      })      
      $(".accordian-container").click(function(){
      	$(".accordian-container").children(".body").slideUp();
      	$(".accordian-container").removeClass("active")
      	$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
      	$(this).children(".body").slideDown();
      	$(this).addClass("active")
      	$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
      })

       $(".nav ul li a, .go-down").click(function(event){
         if(this.hash !== ""){

              event.preventDefault();

              var hash=this.hash; 

              $('html,body').animate({
                scrollTop:$(hash).offset().top
              },800 , function(){
                 window.location.hash=hash;
              });

              // add active class in navigation
              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
         }
      })
})

</script>
<script src="./jss/appp.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
      }
    );
    wow.init();
  </script>
    </body>
</html>
