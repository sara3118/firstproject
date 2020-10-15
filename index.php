<?php
session_start();
include "security/secure.php";
?>
<html>
<head><title>My first page Php</title>
</head>
<body>
<h1>BONJOUR</h1>
<?php

   define('NOM','ENSEIGNANT INF');
   $nom ="sara";
   $a=3;
   $b=4;
   $c=6;
   echo"<h1>$a x \"$b\" =".$a*$b."</h1>";
   
   $nom="Bienvenue Sara <br/>";
  
    echo $nom;
	
   //-------------------------------------------------for()

    for($i=0;$i<3;$i++){
	      
		    echo $i."<br/>";
   
	}

    //------------------------------------------------- while()

	$i=0;
	while($i<3){
		echo $i."<br/>";
		$i++;
	}
     //-------------------------------------------------do while()
		/*  $i=0;
	 
	 do{
		 echo"<em>".$i."</em><br/>";
		 
	 }while($i<3);*/
	 
	
	 
	 
	    if(($a<$b) && ($a<$c))

   {

	

		echo " A est le plus petit sa valeur est  $a";

		if($b>$c){

		    

			echo " l'ordre est A < C < B ($a<$c<$b)";

	   }

	   else {

		   

			echo " l'ordre est A < B < C ($a<$b<$c)<br/><br/>";

	   } 

   }

   else if($a<$b && $a>$c)

   {

	   echo " C est le plus petit sa valeur est $C ";

	   echo " l'ordre est C < A < B ($c<$a<$b)";

   }

   else if($a>$b && $a<$c)

   {

	   echo " b est le plus petit sa valeur est $b ";

	   echo " l'ordre est b < a < c ($b<$a<$c)";

	   

   }

   else if($a>$b or $a>$c)

   {

	   if($b>$c){

		    echo " C est le plus petit sa valeur est $c<br/><br/> ";

			echo " l'ordre est C < B < A ($c<$b<$a)<br/><br/>";

	   }

	   else {

		    echo " B est le plus petit sa valeur est $b<br/><br/> ";

			echo " l'ordre est B < C < A ($b<$c<$a)<br/><br/>";

	   }

   }

   
            $inscrit = true;
            $age = 21;
            
            if($inscrit){
                if($age >= 18){
                    echo 'Utilisateur inscrit et majeur, accès autorisé<br>';
                }else{
                    echo 'Utilisateur inscrit et mineur, accès restreint<br>';
                }
            }else{
                echo 'Utilisateur non inscrit, accès refusé<br>';
            }
  
		   

	 
  
             $prenom = "Sara";
            $nom = "Gamal";
            $age = 38;
            
            echo "Je m'appelle $prenom et j'ai $age ans <br>";
            echo "Je m'appelle {$prenom} et j'ai {$age} ans <br>";
            echo 'Je m\'appelle $prenom et j\'ai $age ans <br><br>';
            
            $prez = "Je suis $prenom $nom, j'ai $age ans <br>";
            $prez2 = "Je suis {$prenom} {$nom}, j'ai {$age} ans <br>";
            $prez3 = 'Je suis $prenom $nom, j\'ai $age ans <br><br>	<br/>';
            
            echo $prez;
            echo $prez2;
            echo $prez3;
			
			
		    $prenom = "Lara";
            $nom = "Lana";
            $age = 28;
            $prez = "Je suis " .$prenom. " " .$nom. ", j'ai " .$age. " ans";
            $prez2 = 'Je suis ' .$prenom. ' ' .$nom. ', j\'ai '.$age. ' ans';
            
            
            echo "Je m'appelle " .$prenom. " et j'ai " .$age. " ans <br>";
            echo 'Je m\'appelle ' .$prenom. ' et j\'ai ' .$age. ' ans <br>	<br/>';
            
            echo $prez. '<br>' .$prez2;
			
		
			
			             function bonjour(){
                echo 'Bonjour à tous <br><br>';
            }
            bonjour();
            bonjour();
            bonjour();
			//------------------------------------------------
			function add2($a){
				return $a+2;
			
			}
			$b=add2(3);
			echo $b;
			
			 //-----------------------------------------------           
            function addition($x, $y){
				global $b;
				return $x+$b;
            }
			$b=addition(3,6);
			
                 echo"<hr/>".$b.'<br>';
				 
				 //-----------------------------------------------------
				
				             function hello(...$prenoms){
                foreach($prenoms as $p){
                    echo 'hello ' .$p. '<br>';
                }
            }
            
            hello('Mathilde', 'Pierre', 'Victor');
		//----------------------------------------------
            
            echo 'La constante NOM stocke la valeur ' .NOM;
			
			echo '<br> The line'.__LINE__;
			echo'<br> The file'.__FILE__. '<br><br>';
			
			 //-------------------------------------------------
			 
			             $prenoms = array('Mathilde', 'Pierre', 'Amandine', 'Florian');
						 $nom=["KUEYA","KHEANG","SAMY","BABY","MAGALIE"];
                         $ages = [27, 29, 21, 29];
						//------methode1 for-----------
						            for ($i=0;$i<4;$i++){
									
									echo '<br>';
                                       echo $prenoms[$i];
									}  
						//-------------------method2 foreach-------------
						 foreach($nom as $name){
							 echo'<br/>';
							 echo $name;
						 }
						 
						 //-------------methode3 while------------
						$i = 0;
                        while ($i < 4) {
                               
							   echo '<br>';
                               echo $prenoms[$i];
							    $i++;
								
								 echo '<br>';
								 
								 
								 echo '<br>';
                               }
							   //--------------------------------------------
							   echo 'Timestamp actuel : ' .time(). '<br>';  
							   //---------------------------------
            $suite = [
                [1, 2, 4, 8, 16],
                [1, 3, 9, 27, 81]
            ];
            $utilisateurs = [
                ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
                ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
                ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
            ];
            $produits = [
                'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
                'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
            ];
            foreach ($suite as $suitenb => $n){
                echo 'Suite ' .($suitenb + 1). ' : ';
                foreach($n as $ni => $nn){
                    echo $nn. ', ';
                }
                echo '<br><br>';
            }
            foreach($utilisateurs as $nb => $infos){
                echo 'Utilisateur n°' .($nb + 1). ' :<br>';
                foreach ($infos as $c => $v){
                    echo $c. ' : ' .$v. '<br>';
                }
                echo '<br>';
            }
            foreach ($produits as $clef => $produit){
                echo 'Produit : ' .$clef. '<br>';
                foreach($produit as $caracteristique => $valeur){
                    echo $caracteristique. ' : ' .$valeur. '<br>';
                }
                echo '<br>';
            }
			
			 //--------------------------------------------
					 
					  
			           /* echo 'Timestamp actuel : ' .time(). '<br>';
            echo 'Timestamp actuel (avec mktime()) : '.mktime(). '<br>';
            $t1 = mktime(8, 30, 0, 1, 25, 2019);
            $gmt1 = gmmktime(8, 30, 0, 1, 25, 2019);
            echo 'Timestamp 24 septembre 2020 14h35 (GMT+1) : ' .$t1. '<br>';
            echo 'Timestamp 24 septembre 2020 14h35 (GMT) : ' .$gmt1. '<br>'; */
			
		   /* echo date('d/m/Y'). '<br>';
            echo date('l d m Y h:i:s'). '<br>';
            echo date('c'). '<br>';
            echo date('r'). '<br>';*/
			
			
			//----------------------
			    $_SESSION['prenom'] = 'Sara';
                $_SESSION['age'] = 38;
			
			            if(isset($_SESSION['age'])){
                echo 'Tu as ' .$_SESSION['age']. ' ans<br>';
                
            }
            
            echo 'Contenu de $_SESSION[\'prenom\'] : ' .$_SESSION['prenom'];
			 echo 'Contenu de $_SESSION[\'age\'] : ' .$_SESSION['age'];
        ?>
							   

</body>
</html>