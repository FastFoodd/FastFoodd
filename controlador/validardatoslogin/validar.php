<?php
include '../../controlador/conexion.php';
class validar{
    public static function validaruser($username,$pass){
        $conection= new conection;
        $conection=$conection->get_conection();
        $sql=("SELECT *FROM usuarios where usuario= :adminname AND 
        contra= :adminpass AND tipo= :admintipo");
        $sql2=("SELECT *FROM usuarios where usuario= :username AND 
        contra= :userpass AND tipo= :usertipo");
        $tipoa=1; $tipob=2;
        $statement=$conection->prepare($sql);
        $statement->bindParam(':adminname',$username);
        $statement->bindParam(':adminpass',$pass);
        $statement->bindParam(':admintipo', $tipoa);
        $statement->execute();

        $statement2=$conection->prepare($sql2);
        $statement2->bindParam(':username',$username);
        $statement2->bindParam(':userpass',$pass);
        $statement2->bindParam(':usertipo', $tipob);
        $statement2->execute();

       if($statement->rowCount()==0 || $statement2->rowCount()==0){
        header('location: ../../index2.php');
       }
       if($statement->rowCount()==1){
           session_start();
           $usuario=$_POST["usuario"];
           $_SESSION['user']=$usuario;
         header('location: ../../vista/home/inicioadmin.php');
       }
       if($statement2->rowCount()==1){
        session_start();
        $usuario=$_POST["usuario"];
        $_SESSION['user']=$usuario;
        header('location: ../../vista/home/iniciouser.php');
       }
    }
}
?>