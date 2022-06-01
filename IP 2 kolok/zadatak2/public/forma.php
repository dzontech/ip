<?php 

$msg = isset($msg)?$msg:'';

?>

<html>
    <head>
        <title>zadatak2</title>
    </head>
    <body>

    Unesite rezultat:
        <form action="" method="post">
            brIndexa: <input type="text" name="brIndexa"><br>
            idPredmeta: <input type="text" name="idPredmeta"><br>
            ocena: <input type="text" name="ocena"><br>
            <input type="submit" name="action" value="insert"><br><br>

            
    Unesite brIndexa za prikaz polozenih ispita:
            brIndexa: <input type="text" name="brIndexa"><br>
            <input type="submit" name="action" value="polozeniPredmeti">

        </form>
        
        <?=$msg?>
    </body>
</html>

