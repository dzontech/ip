<?php 

require_once '../proizvodjac/DAO.php';


?>
<html>
    <head>
        <title>zadatak</title>
    </head>
    <body>
        <?php 
        $dao = new DAO();
        $rez = $dao -> sviProizvodjaci();
        foreach($rez as $r) {
        ?>
        id: <?=$r['id']?><br>
        naziv:  <a href="../proizvodjac/?action=doPost&id=<?=$r['id']?>"> <?=$r['naziv']?></a> <br><br>
        <?php } ?>
        
    </body>
</html>



