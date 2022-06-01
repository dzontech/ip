<?php 

require '../api/flight/Flight.php';
require_once '../student/DAO.php';

Flight::route('/', function() {
    echo 'Helloeee';
});

Flight::route('GET /students', function(){

    $dao = new DAO();
    echo json_encode($dao->getAllStudents());
});

Flight::route('GET /predmeti', function(){

    $dao = new DAO();
    echo json_encode($dao->getAllPredmeti());
});

Flight::route('GET /student/@id', function($id){

    $dao = new DAO();
    echo json_encode($dao->getStudentById($id));
});

Flight::route('GET /predmeti/@id', function($id){

    $dao = new DAO();
    echo json_encode($dao->getPredmetiByStudentId($id));
});
Flight::route('GET /studentOne/@id', function($id){

    $dao = new DAO();
    echo json_encode($dao->getStudent($id));
});
Flight::route('GET /studentIndex/@brIndexa', function($brIndexa){

    $dao = new DAO();
    echo json_encode($dao->getStudentByIndex($brIndexa));
});
Flight::route('DELETE /delete/@id', function($id){

    $dao = new DAO();
    echo json_encode($dao->delete($id));
});

Flight::route('PUT /student/@id', function($id){
    $dao = new DAO();
    var_dump(Flight::request()->data->ime);
    $ime = Flight::request()->data->ime;
    $prezime =Flight::request()->data->prezime;
    $brIndexa = Flight::request()->data->brIndexa;
    $result = $dao->update($id, $ime, $prezime, $brIndexa);
    echo json_encode($result);
});

Flight::route('POST /insert', function(){
    $dao = new DAO();

    $ime = Flight::request()->data->ime;
    $prezime =Flight::request()->data->prezime;
    $brIndexa = Flight::request()->data->brIndexa;
    echo json_encode($dao->insert($ime, $prezime, $brIndexa));
});


Flight::start();
?>