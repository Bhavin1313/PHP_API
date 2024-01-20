<?php
header("Access-Control-Allow-Methods: DELETE");

include("../Config/config.php");

$config = new Config();

if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    $object = file_get_contents("php://input");

    parse_str($object,$_DELETE);

    $id = $_DELETE['id'];

    $isDeleted = $config->deleteStudent($id);


    if($isDeleted){
        $res['data'] = "Student Deleted...";
    }else{
        $res['data'] = "Fail to Delete...";
    }
}else{
    $res['error'] = "Only DELETE http Method is Allowed....";
}
echo json_encode($res);

?>