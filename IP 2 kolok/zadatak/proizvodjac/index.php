<?php 

$action = isset($_REQUEST['action'])?$_REQUEST['action']:'';
require_once '../proizvodjac/controller.php';

switch($_SERVER['REQUEST_METHOD']){

    case 'GET':
        {
            switch($action) {

                case 'forma':
                include '../public/prikazAll.php';
                break;

                case 'logout':
                $cs = new controller();
                $cs -> doGet();
                break;

                case 'doPost':
                $cs = new controller();
                $cs -> doPost();
                break;

            }
        }
       
   
}


?>