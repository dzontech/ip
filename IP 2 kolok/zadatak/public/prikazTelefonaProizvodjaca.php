<?php

require_once '../proizvodjac/DAO.php';

if(!isset($_SESSION))
    session_start();
if($_SESSION['sesija']!='') {
?>
<html>
    <head>
        <title>zadatak</title>
    </head>
    <body>
        <?php
        
    $dao = new DAO();
    $rez = $dao -> selectByProizvodjac($_SESSION['sesija']);
        ?>
        <?php foreach($rez as $r) {?>

            id:<?=$r['id']?> <br>
            naziv:<?=$r['naziv']?><br>
            
            cena:<?=$r['cena']?><br><br>

        <?php }?>

        <a href="../proizvodjac/?action=logout">Logout</a>
    </body>
</html>

<?php } else { header('Location:../index.php');}?>
