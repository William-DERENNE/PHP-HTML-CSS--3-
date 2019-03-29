<?php   header ( 'Content-Type: text/html;charset=UTF-8' );


class Contenant {
    
    public $nom;
    public $description;
    public $nbEmplacements;
    public $contenu;
    public $nbObjetsContenus;
    public $plein = false;
    
    
        public function __construct ( string $_nom, string $_description, int $_nbEmplacements ) {
            
            $this -> nom = $_nom;
            $this -> description = $_description;
            $this -> nbEmplacements = $_nbEmplacements;
            $this -> nbObjetsContenus = 0;
            
        }
    
    
    public function insérerObjet ( Objet $_objet ) {
        if ( $this -> plein ) {
            echo '<br />!!! CONTENANT PLEIN !!!<br />';
        } else {
            $this -> contenu[] = $_objet;
            $this -> nbObjetsContenus ++;
            if ( $this -> nbObjetsContenus >= 8 ) {
                $this -> plein = true;
            }
        }
    }    

    public function retirerObjet ( Objet $_objet ) {
        
    }
    
    public function getContenant() {
        echo '<pre>'; print_r ( $this ); echo '</pre>';
    }
}?>
