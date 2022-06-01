<?php 

require_once '../proizvodjac/DAO.php';
$dao = new DAO();
$rez = $dao -> sviProizvodjaci();


foreach($rez as $r) {
?>

id: <?=$r['id']?><br>
naziv: <?=$r['naziv']?><br><br>

<?php }?>
