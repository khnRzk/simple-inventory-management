<?php 

class Database {
   
    private $con;
    public function connect() {    
        $this->con = new Mysqli('localhost','root','','inventory');
     if($this->con) {   
            return $this->con;  
        }        
    }
}

?>