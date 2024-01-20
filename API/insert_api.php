<?php
header("Access-Control-Allow-Methods: POST");

include("../Config/config.php");

$config = new Config();
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $grid = $_POST['grid'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $city = $_POST['city'];

    $responce = $config->insertStudent($grid,$name,$course,$city);


    if($responce){
        $res['data'] = "Data Added Successfully...";
    }else{
        $res['error'] = "Data Insertion Faild...";
    }
}else{
    $res['error'] = "Only POST http Method is Allowed....";
}
echo json_encode($res);

?>