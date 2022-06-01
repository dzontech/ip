<?php 

require_once '../rezultat/DAO.php';

if(!isset($_SESSION))
    session_start();
if($_SESSION['sesija']!='') {



$dao = new DAO();
$rez = $dao -> polozeniPredmeti($_SESSION['sesija']);

?>

<html>
    <head>
        <title>zadatak2</title>
    </head>
    <body>
        <?php 
        foreach($rez as $r) {
        ?>
        
        naziv: <?=$r['naziv']?>


        <?php }?>

        <a href="../rezultat/?action=logout">Logout</a>
    </body>
</html>

<?php }?>