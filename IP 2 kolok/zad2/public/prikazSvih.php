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
    $rez = $dao->getAllStudents();
    ?>
    <?php
    foreach ($rez as $r) {
    ?>
        id: <?= $r['id'] ?><br>
        ime: <?= $r['ime'] ?><br>
        prezime: <?= $r['prezime'] ?><br>
        brIndexa: <?= $r['brIndexa'] ?> <br>
    <?php } ?>
    <a href="../student/?action=logout">Logout</a>
</body>

</html>