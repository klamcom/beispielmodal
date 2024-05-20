<?php
require "inc/db-connect.php";

if (!empty($_POST)) {

    $name = '';
    if (isset($_POST['name'])) {
        $name = (string) $_POST['name'];

    }
    $email = '';
    if (isset($_POST['email'])) {
        $email = (string) $_POST['email'];
    }


    if (!empty($name) && !empty($email)) {
        
            $stmt = $pdo->prepare('INSERT INTO tblbeispiel (name, email) 
            VALUES (:name, :email)');
    
            $stmt->bindValue('name', $name);
            $stmt->bindValue('email', $email);
            $stmt->execute();
    
        }
      
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    ?>

