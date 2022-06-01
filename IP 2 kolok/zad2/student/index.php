<?php 

$action = isset($_REQUEST['action'])?$_REQUEST['action']:'';
require_once '../student/controller.php';

switch($_SERVER['REQUEST_METHOD']) {

    case 'GET':
        {
            switch($action) {

                case 'forma':
                include '../public/forma.php';
                break;

                case 'logout':
                $cs = new controller();
                $cs -> logout();
                break;

                case 'Show':
                $cs = new controller();
                $cs -> getStudent();
                break;

                case 'ShowAll':
                $cs = new controller();
                $cs -> getAllStudents();
                break;

                case 'ALLPredmeti':
                $cs = new controller();
                $cs -> getAllPredmeti();
                break;
    
                case 'ShowPredmetiStudenta':
                $cs = new controller();
                $cs -> getPredmetiByStudentId();
                break;
  
            }
        }
    break;
    case 'POST':
        {
            switch($action) {
                
                case 'Update':
                $cs = new controller();
                $cs -> update();
                break;

                case 'Delete':
                $cs = new controller();
                $cs -> delete();
                break;

                case 'Insert':
                $cs = new controller();
                $cs -> insert();
                break;    
            }break;
        }
}
?>