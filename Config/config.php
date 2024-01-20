<?php
class Config{

    public $HOSTNAME = "127.0.0.1";
    public $USERNAME = "root";
    public $PASSWORD = "";
    public $DATABASE_NAME = "php3";
    public $con_res;

    public function Connect(){
        $this->con_res = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DATABASE_NAME);
        return $this->con_res;
    }

    public function insertStudent($grid,$name,$course,$city){
        $this->Connect();
        $query = "INSERT INTO student_info(grid,name,course,city) VALUES ($grid,'$name','$course','$city');";
        $res = mysqli_query($this->con_res,$query);
        return $res;
    }

    public function fetchStudent(){
        $this->Connect();
        $query = "SELECT * FROM student_info";
        $object = mysqli_query($this->con_res,$query);
        return $object;
    }

    public function deleteStudent($id){
        $this->Connect();
        $query = "DELETE * FROM student_info WHERE id=$id";
        $res = mysqli_query($this->con_res,$query);
        return $res;
    }

}
?>