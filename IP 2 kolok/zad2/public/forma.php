<?php 

$msg = isset($msg)?$msg:'';

?>

<html>
    <head>
        zad2
    </head>
    <body>
        UPDATE
        <form action="" method="post">

            ID: <input type="text" name="id"> <br>
            Ime: <input type="text" name="ime"> <br>
            Prezime: <input type="text" name="prezime"> <br>
            BrIndexa: <input type="text" name="brIndexa"> <br>
            <input type="submit" name="action" value="Update">
        </form>
        DELETE
        <form action="" method="post">
            ID studenta kog zelite da obrisete: <input type="text" name="id"> <br>
            <input type="submit" name="action" value="Delete">
        </form>
        INSERT
        <form action="" method="post">
            Ime: <input type="text" name="ime"> <br>
            Prezime: <input type="text" name="prezime"> <br>
            BrIndexa: <input type="text" name="brIndexa"> <br>
            <input type="submit" name="action" value="Insert">
        </form>

        <form action="" method="get">
            ID studenta kog zelite da prikazete: <input type="text" name="id"> <br>
            <input type="submit" name="action" value="Show">
        </form>

        <form action="" method="get">
            <input type="submit" name="action" value="ShowAll">
        </form>

        <form action="" method="get">
            <input type="submit" name="action" value="ALLPredmeti">
        </form>

        <form action="" method="get">
            ID studenta cije predmete zelite da prikazete: <input type="text" name="id"> <br>
            <input type="submit" name="action" value="ShowPredmetiStudenta">
        </form>

        


        <?=$msg?>

        

    



    </body>
</html>

