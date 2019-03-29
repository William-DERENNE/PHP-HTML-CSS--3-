<?php   header ( 'Content-Type: text/html;charset=UTF-8' );


class Personnage {
    
    public $nom;
    public $description;
    public $PO;                 // Pièces D'Or
    public $PV;                 // Points de Vie
    public $FO;                 // Force
    public $AG;                 // Agilité
    public $IN;                 // Intelligence
    public $SA;                 // Sagesse
    
    public $attaque;
    public $défense;
    
    public $arme;
    public $armure;
    
    public $sacADos;
    public $poches;
    
    
        public function __construct ( string $_nom, string $_description, int $_PV, int $_FO, int $_AG, int $_IN, int $_SA ) {
                        
            $this -> nom = $_nom;
            $this -> description = $_description;
            $this -> PO = 25;
            $this -> PV = $_PV; 
            $this -> FO = $_FO; 
            $this -> AG = $_AG; 
            $this -> IN = $_IN; 
            $this -> SA = $_SA;
            
            $this -> attaque = ( ( ( $this -> FO + $this -> AG ) * 2 ) + ( $this -> IN + $this -> SA ) );
            $this -> défense = ( ( $this -> FO + $this -> AG ) + ( ( $this -> IN + $this -> SA ) * 2 ) ); 
            
        }
    
    
    public function getPersonnage() {
        echo '<pre>'; print_r ( $this ); echo '</pre>';    
    }
    
    public function ajouterArme ( Arme $_arme ) {
        $this -> arme = $_arme;
        $this -> attaque += $this -> arme -> attaque;
    }
    
    public function ajouterArmure ( Armure $_armure ) {
        $this -> armure = $_armure;
        $this -> défense += $this -> armure -> défense;
    }
    
    public function enleverArme() {
        $this -> attaque -= $this -> arme -> attaque;
        $this -> arme = false;
    }
    
    public function enleverArmure() {
        $this -> défense -= $this -> armure -> défense;
        $this -> armure = false;
    }
    
    
    
    
    
}?>
