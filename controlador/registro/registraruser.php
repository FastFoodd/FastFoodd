<link rel="stylesheet" href="./Bootstrap/alertifyjs/css/alertify.css">
<link rel="stylesheet" href="./Bootstrap/alertifyjs/css/themes/default.css">
<script src="./js/jquery.min.js"></script>
<script src="./Bootstrap/alertifyjs/alertify.js"></script>

<?php   
include '../../controlador/conexion.php';
class registraruser{
    public static function registrar_user($username,$contra,$email){
        $tipob=2;
        $conection= new conection;
        $conection=$conection->get_conection();
        $sql=("INSERT INTO usuarios (usuario,contra,email) 
        VALUES (:username,:contra,:email)");
        $statement=$conection->prepare($sql);
        $statement->bindParam(':username',$username);
        $statement->bindParam(':contra',$contra);
        $statement->bindParam(':email',$email);
        if(!$statement){
            header('Location: http://fastfood.ittlaxiacosistemas.com/fastfood/');
        }
        else{
            $statement->execute();
            header('Location: http://fastfood.ittlaxiacosistemas.com/fastfood/');
        }
        
    }
}
?>