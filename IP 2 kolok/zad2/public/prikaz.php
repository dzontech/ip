<?php

require_once '../student/DAO.php';
if(!isset($_SESSION))
    session_start();
if($_SESSION['korisnik']!='')
{
    $dao = new DAO();
    $student = $dao -> getStudent($_SESSION['korisnik']);
?>

    ID: <?=$student['id']?> <br>
    Ime: <?=$student['ime']?> <br>
    Prezime:<?=$student['prezime']?> <br>
    BrIndexa: <?=$student['brIndexa']?> <br>
    <a href="../student/?action=logout">Logout</a>

<?php 
}
else {
    header('Location:../index.php');
}

?>