<?php

class Usuario{

    public function login($email, $password){
        global $pdo;

        $sql = "SELECT * FROM clientes WHERE email = :email AND password = :password";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $password);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            
        }
    }

}


?>