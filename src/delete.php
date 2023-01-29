
<?php
//delete data from table
include ('dbcon.php');

$conn = db();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tasks WHERE Id = '$id'";
    $conn->exec($sql);
    echo "Record deleted successfully";
   // header("Location: index.php");
    exit();
}
?>






