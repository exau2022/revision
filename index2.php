<?php

/****************QUESTION 1 ***********************/

//un fichier index.php

if(isset($_GET['page'])){
    if(ctype_digit($_GET['page'])){
        echo "Bonjour Toto";
    }
    else{
        echo "Bonjour".$_GET['page'];
    }
}
else{
    echo 'Bonjour';
}


Que vont afficher les adresses suivantes:
    
    1)index.php?action=35
    
    2)index.php?page=12
    
    3)index.php?page=about
    
    4)index.php?pag=contact
    

/****************QUESTION 2 ***********************/

Soit une balise html:
    
    <a href="#" id="order" data-id='2'>Commander</a>
    
1)Comment va-t-on récupérer la valeur du data id en javascript ?

2)A quoi sert le # dans l'attribut href ?

/****************QUESTION 3 ***********************/

Soit la classe PHP suivante:
    
    class Coeur{
            
        private $pulsations;
        private $vie;
        
        public function __construct(){
            $vie=32;
            $pulsations=61;
        }
        
        public function vieillir(){
            $this->vie++;
        }
        
        public function faireDuSport(){
            $this->pulsations=110;
        }
    }
    
    
    
    abstract class CorpsHumain{
        protected $coeur;
        protected $tete;
        protected $pieds;
        protected $taille;
        
         public function __construct($taille){
            $this->coeur=new Coeurs();
            $this->tete=new Tete();
            $this->pieds=[new Pied(),new Pied()];
            $this->taille=$taille;
        }
        
        abstract public function changerTaille();
    }
    
    
    
    class CorpsEnfant extends CorpsHumain{
        public function changerTaille(){
            $this->taille++;
        }
    }
    
    $corps=new CorpsHumain();
    
    1)Comment nomme -t - on l instruction ci-dessus
    
    2)3 erreurs se sont glissées, lesquelles ?
    
    3) Comment se nomme cette fonction: public function __construct(){
        
    4)A quoi sert-elle ?
    
    5) Que signifie abstract ? à quoi sert-il ?
    
    6) Comment appelle-t-on le fait de créer une méthode abstract vide ?
    
    7) Qu a de spécial la classe CorpsEnfant ? 
    
    
   /****************QUESTION 4 ***********************/ 
   
 Soit le code CSS ci-dessous:
     
#article>p.red span:nth-child(3){
    margin:10px 15px 25px;
    box-sizing:border-box;
    
}

1) que va cibler précisément ce sélecteur ?

2) quelle sera la marge gauche de l élément ?

3) quelle sera la marge basse de l élément ?

4) A quoi sert le box-sizing ?


    
    