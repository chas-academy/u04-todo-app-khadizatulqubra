<?php
//conect to database
function db()
{
    $host ='db';
    $db   = 'Todolist';
    $user = 'root';
    $pass = 'example';
    $charset = 'utf8mb4';
    
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
       
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
    return null;
     }



?>

