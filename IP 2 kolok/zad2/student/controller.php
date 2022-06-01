<?php 

require_once '../student/DAO.php';


session_start();

class controller {

    public function update() {
        
        $id = isset($_POST['id'])?$_POST['id']:'';
        $ime = isset($_POST['ime'])?$_POST['ime']:'';
        $prezime = isset($_POST['prezime'])?$_POST['prezime']:'';
        $brIndexa = isset($_POST['brIndexa'])?$_POST['brIndexa']:'';

        if(!empty($id) && !empty($ime) && !empty($prezime) && !empty($brIndexa))
        {
            $dao = new DAO();
            $postoji = $dao -> getStudentById($id);

            if($postoji == true)
            {
                $dao -> update($id, $ime, $prezime, $brIndexa);
                $_SESSION['korisnik']=$id;
                include '../public/prikaz.php';
            }
            else {
                $msg = 'Uneseni id ne postoji!';
                include '../public/forma.php';
            }

        }
        else {
            $msg = 'Morate uneti sva polja!';
            include '../public/forma.php';
        }
    }

    public function delete() {
        $id = isset($_POST['id'])?$_POST['id']:'';

        if(!empty($id)) {
            $dao = new DAO();
            $postoji = $dao ->getStudentById($id);

            if($postoji == true) {
                $dao -> delete($id);
               
                $msg = 'Uspesno obrisan student!';
                include '../public/forma.php';

            }
            else {
                $msg = 'Ne postoji student kojeg zelite da obrisete!';
                include '../public/forma.php';
            }
        }
        else {
            $msg = 'Morate uneti id studenta kojeg zelite da obrisete!';
            include '../public/forma.php';
        }
    }

    public function insert() {

        $ime = isset($_POST['ime'])?$_POST['ime']:'';
        $prezime = isset($_POST['prezime'])?$_POST['prezime']:'';
        $brIndexa = isset($_POST['brIndexa'])?$_POST['brIndexa']:'';

        if(!empty($ime) && !empty($prezime) && !empty($brIndexa))
        {
            $dao = new DAO();
            $postojiIndex = $dao -> getStudentByIndex($brIndexa);

            if($postojiIndex != true) {

                $dao ->insert($ime, $prezime, $brIndexa);
                $msg = 'Uspesno unesen student!';
                include '../public/forma.php';

            }
            else {
                $msg = 'Vec postoji student sa unesenim indexom!';
                include '../public/forma.php';
            }

        }
        else {
            $msg = 'Morate uneti sve podatke za unos studenta!';
            include '../public/forma.php';
        }
    }

    public function getAllStudents() {
        $dao = new DAO();
        $dao->getAllStudents();
        include '../public/prikazSvih.php';
    }

    public function getStudent() {
        $id = isset($_GET['id'])?$_GET['id']:'';

        if(!empty($id)) {
            $dao = new DAO();
            $postoji = $dao ->getStudentById($id);

            if($postoji == true) {
                $dao -> getStudent($id);
                $_SESSION['korisnik']=$id;
               
               
                include '../public/prikazJednog.php';

            }
            else {
                $msg = 'Ne postoji student kojeg zelite da prikazete!';
                include '../public/forma.php';
            }
        }
        else {
            $msg = 'Morate uneti id studenta kojeg zelite da prikazete!';
            include '../public/forma.php';
        }
    }

   

    
   

    public function logout(){
        if(isset($_SESSION['korisnik']))
        {   session_unset();
            session_destroy();
            include '../public/forma.php';
        }
    }

    public function getAllPredmeti() {
        $dao = new DAO();
        $dao -> getAllPredmeti();
        include '../public/prikazSvihPredmeta.php';
    }

    public function getPredmetiByStudentId(){
        
        
        $id = isset($_GET['id'])?$_GET['id']:'';

        if(!empty($id)){

            
            $dao = new DAO();
            $postoji = $dao->getStudentById($id);
            if($postoji == true)
            {
                $dao -> getPredmetiByStudentId($id);
                $_SESSION['korisnik']=$id;
                include '../public/prikazPredmetaStudenta.php';
            }
            else {
                $msg = 'Ne postoji student sa unesenim id-em!';
                include '../public/forma.php';
            }

        }
        else {
            $msg = 'Morate uneti id studenta za prikaz njegovih predmeta!';
            include '../public/forma.php';
        }
    }

   
}

?>