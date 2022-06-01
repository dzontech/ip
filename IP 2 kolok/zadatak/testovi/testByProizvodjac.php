<?php 

require_once '../proizvodjac/DAO.php';

$dao = new DAO();
$rez = $dao -> selectByProizvodjac(2);

foreach($rez as $r) {

    
?>

id: <?=$r['id']?><br>


naziv: <?=$r['naziv']?><br>

cena: <?=$r['cena']?><br><br>

<?php }?>
