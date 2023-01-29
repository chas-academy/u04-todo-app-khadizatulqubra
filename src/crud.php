<?php 
include 'dbcon.php';
//CREATE data
/* function createData($title, $description, $done)
{
    $conn = db();
    $query = "INSERT INTO tasks (title, description, done) VALUES (:title, :description, :done)";
    try {
        $stmt = $conn->prepare($query);
        $stmt->execute([
            'title' => $title,
            'description' => $description,
            'done' => $done
        ]);
        echo "Data inserted successfully";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} */




/* 
function getData()
{
    $conn = db();
    $query = "SELECT * FROM tasks";
try {
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
} catch (PDOException $e) {
    echo $e->getMessage();
}
} */
/* $conn = db();
function updateData($id, $title, $description, $done)
{
    $conn = db();
    $query = "UPDATE tasks SET title = :title, description = :description, done = :done WHERE id = :id";
    try {
        $stmt = $conn->prepare($query);
        $stmt->execute([
            'id' => $id,
            'title' => $title,
            'description' => $description,
            'done' => $done
        ]);
        echo "Data updated successfully";
    } catch (PDOException $e) {
        echo $e->getMessage(); */
 //   }
//}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


   <?php
    /* include 'crud.php';
    echo("<ul>");
    foreach (getData() as $row) {
       print ("<li>"); 
         print ($row['title']);
            print ("</li>");

    }

    echo("</ul>"); */
/* 
    $conn = db();
    function deleteData($id)
    {
        $conn = db();
        $query = "DELETE FROM tasks WHERE id = :id";
        try {
            $stmt = $conn->prepare($query);
            $stmt->execute([
                'id' => $id
            ]);
            echo "Data deleted successfully";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } */

    ?>

    
</body>
</html>