<?php 
require_once '../student/DAO.php';
?>

<html>
    <head>
        <title>zad2</title>
    </head>
    <body>
        <?php 
        
        $dao = new DAO();
        $rez = $dao -> getPredmetiByStudentId($id);
        

        ?>

        <?php foreach($rez as $r) {?>

            id: <?=$r['id']?>
            naziv: <?=$r['naziv']?>
            idStudenta: <?=$r['idStudenta']?>

        <?php } ?>
        <a href="../student/?action=logout">Logout</a>
    </body>
</html>