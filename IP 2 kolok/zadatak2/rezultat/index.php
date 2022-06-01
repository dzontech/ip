<?php 

$action = isset($_REQUEST['action'])?$_REQUEST['action']:'';
require_once '../rezultat/controller.php';

switch($_SERVER['REQUEST_METHOD']) {

    case 'GET':
        {
            switch($action) {

                case 'forma':
                include '../public/forma.php';
                break;

                case 'logout':
                #$cs = new controller();
                #$cs -> logout();
                include '../public/forma.php';
                break;
                
                
            }
        }
        break;
    case 'POST':
        {
            switch($action) {
                
                case 'polozeniPredmeti':
                $cs = new controller();
                $cs -> polozeniPredmeti();
                break;

                case 'insert':
                $cs = new controller();
                $cs ->insert();
                break;
            }break;
        }
}

?>