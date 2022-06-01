<?php 

require_once '../proizvodjac/DAO.php';

class controller{

    public function doPost() {
        $id = isset($_GET['id'])?$_GET['id']:'';
        $dao=new DAO();
        $dao->selectByProizvodjac($id);
        $_SESSION['sesija']=$id;
        include '../public/prikazTelefonaProizvodjaca.php';
        }
       
    public function doGet() {
        if(isset($_SESSION['sesija'])){
            
            session_destroy();
            include '../public/prikazAll.php';
        }
    }
}


?>