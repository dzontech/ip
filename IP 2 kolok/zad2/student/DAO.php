<?php 

require '../config/db.php';

class DAO {

    private $STUDENTEXIST = 'SELECT * FROM student WHERE id=?';

    private $STUDENTEXISTBYINDEX = 'SELECT * FROM student WHERE brIndexa=?';

    private $UPDATE = 'UPDATE student SET ime=?, prezime=?, brIndexa=? WHERE id=?';

    private $DELETE = 'DELETE FROM student WHERE id=?';

    private $INSERT = 'INSERT INTO student (ime, prezime, brIndexa) VALUES (?,?,?)';

    private $GETALLSTUDENTS = 'SELECT * FROM student';

    private $GETALLPREDMETI = 'SELECT * FROM predmet';

    private $GETPREDMETISTUDENTABYID = 'SELECT * FROM predmet p JOIN student s ON p.idStudenta=s.id WHERE s.id=?';

    

    public function __construct()
    {
        $this -> db = DB::createInstance();
    }

    public function getStudent($id) {
        $statement = $this -> db -> prepare($this-> STUDENTEXIST);
        $statement ->bindValue(1, $id);
        $statement ->execute();

        $result = $statement -> fetch();
        return $result;
    }

    public function getStudentById($id) {
        $statement = $this -> db -> prepare($this -> STUDENTEXIST);
        $statement ->bindValue(1,$id);
        $statement -> execute();
        if($result =$statement->fetch())
            return true;
        else 
            return false;
    }

    public function getStudentByIndex($brIndexa) {
        $statement = $this -> db -> prepare($this -> STUDENTEXISTBYINDEX);
        $statement ->bindValue(1,$brIndexa);
        $statement -> execute();
        if($result =$statement->fetch())
            return true;
        else 
            return false;
    }

    public function update($id, $ime, $prezime, $brIndexa) {
        $statement = $this -> db -> prepare($this -> UPDATE);
        $statement ->bindValue(1,$ime);
        $statement ->bindValue(2,$prezime);
        $statement ->bindValue(3,$brIndexa);
        $statement ->bindValue(4,$id);
        $statement -> execute();
       
    }

    public function delete($id){
        $statement = $this->db -> prepare($this-> DELETE);
        $statement ->bindValue(1,$id);
        $statement -> execute();
    }

    public function insert($ime, $prezime, $brIndexa) {
        $statement = $this ->db->prepare($this->INSERT);
        $statement -> bindValue(1,$ime);
        $statement -> bindValue(2,$prezime);
        $statement -> bindValue(3,$brIndexa);
        $statement -> execute();

    }

    public function getAllStudents() {
        $statement = $this ->db ->prepare($this->GETALLSTUDENTS);
        $statement -> execute();

        $result =  $statement->fetchAll();
        return $result;
    }

    public function getAllPredmeti() {
        $statement = $this->db->prepare($this->GETALLPREDMETI);
        $statement -> execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function getPredmetiByStudentId($id)
    {
        $statement = $this ->db->prepare($this->GETPREDMETISTUDENTABYID);
        $statement -> bindValue(1,$id);
        $statement -> execute();
        $result = $statement->fetchAll();
        return $result;
    }

  

}

?>