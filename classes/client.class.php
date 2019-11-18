<?php
require 'dbconnect.class.php';

class student{

    private $cnx;

    public function __construct(){
        $db = new BasesDonnees;
        $this->cnx= $db->connect();
    }

    public function readAllStud(){
        try {
            $req = 'SELECT * FROM students';
            $result=$this->cnx->prepare($req);
            $result->execute();
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function addStudent($firstname,$lastname,$email,$phone){
        try{
      $sql= 'INSERT INTO students(firstname,lastname,email,phone) VALUES(:param_firstname,:param_lastname,:param_email,:param_phone)';
      $req =$this->cnx->prepare($sql);
      $req->bindParam(':param_firstname',$firstname);
      $req->bindParam(':param_lastname',$lastname);
      $req->bindParam(':param_email',$email);
      $req->bindParam(':param_phone',$phone);
      $req->execute();
      return $req;

    }catch(PDOException $ex){
        echo $ex->getMessage();
    }
    }
    
    public function slcid(){
        $sql = 'SELECT * FROM students WHERE id=:param_id';
        $req = $this->cnx->prepare($sql);
        $req->bindParam(":param_id",$_GET['id']);
        $req->execute();
        $data = $req->fetch();
        return $data;
    }

    public function updateStudent($id,$firstname,$lastname,$email,$phone){
        try {
            $sql = 'UPDATE students SET firstname=:param_firstname,lastname=:param_lastname,email=:param_email,phone=:param_phone WHERE id=:param_id';
        $req = $this->cnx->prepare($sql);
        $req->bindParam (':param_firstname',$firstname);
        $req->bindParam (':param_lastname',$lastname);
        $req->bindParam (':param_email',$email);
        $req->bindParam (':param_phone',$phone);
        $req->bindParam (':param_id',$id);
        $req->execute();
        return $req;
            } catch (PDOException $exception) {
            echo $exception-> getMessage();
   
    }
}
    public function deleteStudent(){
     try {
         $sql = 'DELETE FROM students WHERE id=:param_id ';
         $req = $this->cnx->prepare($sql);
         $req->bindParam(":param_id",$_GET['id']);
         $req->execute();
         return $req;

     } catch (PDOException $exception) {
        echo $exception-> getMessage();
     }
    }

}



?>