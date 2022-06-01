<?php 

require '../config/db.php';

class DAO{


    private $INSERT = 'INSERT INTO rezultat (brIndexa, idPredmeta, ocena) VALUES (?,?,?)'; 

    private $GETALL = 'SELECT * FROM rezultat';

    private $POLOZENIPREDMETI = 'SELECT p.naziv FROM rezultat r JOIN predmet p ON r.idPredmeta=p.id WHERE r.brIndexa=?';

    public function __construct()
    {
        $this->db=DB::createInstance();
    }

    public function insert($brIndexa, $idPredmeta, $ocena){
        $statement= $this->db->prepare($this->INSERT);
        $statement ->bindValue(1,$brIndexa);
        $statement ->bindValue(2,$idPredmeta);
        $statement ->bindValue(3,$ocena);
        $statement->execute();
          
    }

    public function polozeniPredmeti($brIndexa) {
        $statement = $this->db->prepare($this->POLOZENIPREDMETI);
        $statement ->bindValue(1,$brIndexa);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

   
}

?>