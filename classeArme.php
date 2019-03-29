<?php   header ( 'Content-Type: text/html;charset=UTF-8' );


class Objet {
    
    public $nom;
    public $description;
    
    
        public function __construct ( string $_nom, string $_description ) {
            
            $this -> nom = $_nom;
            $this -> description = $_description;
            
        }
        
        
    public function getObjet() {
        echo '<br />' . $this . '<br />';
    }
    
}?>
