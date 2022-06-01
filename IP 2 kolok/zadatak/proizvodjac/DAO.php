<?php 

require '../config/db.php';

class DAO {

    private $GETPROIZVODJACI = 'SELECT * FROM proizvodjac';

    private $SELECTBYPROIZVODJAC = 'SELECT t.id, t.naziv, t.cena FROM telefon t JOIN proizvodjac p ON t.idProizvodjaca=p.id  WHERE p.id=?';


    public function __construct()
    {
        $this -> db=DB::createInstance();
    }

    public function sviProizvodjaci() {
        $statement = $this -> db -> prepare($this->GETPROIZVODJACI);
        $statement -> execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function selectByProizvodjac($id) {
        $statement = $this -> db -> prepare($this->SELECTBYPROIZVODJAC);
        $statement -> bindValue(1, $id);
        $statement -> execute();
        $result = $statement->fetchAll();
        return $result;
    }

}

?>