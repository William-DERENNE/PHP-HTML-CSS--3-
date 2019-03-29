<?php   header ( 'Content-Type: text/html;charset=UTF-8' );

class Armure {
    
    public $nom;
    public $nomObjet;
    
    public $défense;
    
    
    public function __construct ( string $_nom, string $_description, int $_défense ) {
        
        $this -> nom = $_nom;
        $this -> description = $_description;
        $this -> défense = $_défense;
        
    }
    
    
    public function getArme() {
        echo '<pre>'; print_r ( $this ); echo '</pre>';
    }
    
    
    
    
}?>
