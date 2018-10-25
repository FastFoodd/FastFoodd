<?php
 class conection{
   // Conexion a la base de datos mediante PDO 
     public static function get_conection(){
        //variables para la conexion
        $user="root"; $pass=""; $host="localhost"; $dbname="fastfood";
        //Se intenta conectar con los datos asignados
        try{
            //se crea la instancia PDO con sus parametros de conexion
            $conexion= new PDO("mysql:host=$host;dbname=$dbname;",
            $user,$pass);
            //Se retorna la conexion una vez realizada
            return $conexion;
        }
        //Muestra el error en la conexion e indica cual ha sido.
        catch(PDOException $e){
            die($e->getMessage());
        }
     }
 }
 //Se manda a llamar a la conexion.
 conection::get_conection();
?>