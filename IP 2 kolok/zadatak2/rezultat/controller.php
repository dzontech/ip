<?php

require_once '../rezultat/DAO.php';

class controller{


    public function insert() {

        $brIndexa = isset($_POST['brIndexa'])?$_POST['brIndexa']:'';
        $idPredmeta = isset($_POST['idPredmeta'])?$_POST['idPredmeta']:'';
        $ocena = isset($_POST['ocena'])?$_POST['ocena']:'';

        if(!empty($brIndexa) && !empty($idPredmeta) && !empty($ocena)) {

            $dao = new DAO();
            $dao->insert($brIndexa, $idPredmeta, $ocena);
            $_SESSION['sesija']=$brIndexa;
            $msg = 'Uspesno unesen rezultat!';
            include '../public/forma.php';


        }
        else {
            $msg = 'Morate popuniti sva polja!';
            include '../public/forma.php';
        }
    }

    public function polozeniPredmeti() {
        $brIndexa = isset($_POST['brIndexa'])?$_POST['brIndexa']:'';

        if(!empty($brIndexa))
        {
            $dao = new DAO();
            $dao -> polozeniPredmeti($brIndexa);
            $_SESSION['sesija']=$brIndexa;
            include '../public/prikazPolozenih.php';

        }
        else {
            $msg = 'Morate uneti brIndexa za prikaz polozenih predmeta!';
            include '../public/forma.php';
        }
    }

    public function logout() {
        if(isset($_SESSION['sesija'])){
            session_unset();
            session_destroy();
            include '../public/forma.php';

        }
            
    }
}

?>