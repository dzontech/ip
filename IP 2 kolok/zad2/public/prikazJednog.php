<?php 

require_once '../student/DAO.php';
if(!isset($_SESSION))
    session_start();
if($_SESSION['korisnik']!='')
{
?>
<html>
    <head>
        <title>zad2</title>
        <body>
            <?php      
            $dao = new DAO();
            $rez = $dao -> getStudent($_SESSION['korisnik']);
            
            
            ?>
            id: <?=$rez['id']?>
            ime: <?=$rez['ime']?>
            prezime: <?=$rez['prezime']?>
            brIndexa: <?=$rez['brIndexa']?>   

            

            <a href="../student/?action=logout">Logout</a>     
        </body>
    </head>
</html>
<?php 
}else {
    header('Location:../index.php');
}

?>