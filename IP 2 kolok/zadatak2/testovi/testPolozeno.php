<?php 

require_once '../rezultat/DAO.php';

$dao = new DAO();
$rez = $dao -> polozeniPredmeti(111);

foreach($rez as $r) {

?>

naziv: <?=$r['naziv']?>

<?php }?>