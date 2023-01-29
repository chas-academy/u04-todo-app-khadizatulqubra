
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <script src="https://kit.fontawesome.com/0beaa2dd2a.js" crossorigin="anonymous"></script>

<style>
    .form-style-2-heading {
    font-weight: bold;
    font-style: italic;
    border: 2px solid #ddd;
    margin: 10px;
    font-size: 20px;
    padding: 3px;
    text-align: center;

}
.form-style-2 {
    position: relative;
    left: 20%;
    border: 2px solid #ddd;
    margin-bottom: 15px;
    max-width: 50%;
    padding: 20px 12px 10px 20px;
    font: 13px Arial, Helvetica, sans-serif;

}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.display{
    padding: 15px;
    border: 1px solid #4CAF50;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    margin: 5px;
    width: 30%;
}
input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
thead tr {
    background-color: #dddddd;
 
}
thead tr th {
    padding: 8px;
    border : 2px solid black;
}
tbody tr a{
    text-decoration: none;
    color: black;
    border: 1px solid black;
    padding: 5px;
    border-radius: 5px;
    background-color: rgb(0,255,127);
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;

}

</style>

</head>
<body>
 

<div class="form-style-2">
<div class="form-style-2-heading">Create your to do list</div>
   

    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <center>
                    <input type="text" name="title" id="title" placeholder="Title">
                    <input type="text" name="description" id="description" placeholder="Enter your task" >
                    <input type="checkbox" name="done" id="done" value="done">
                    <label for="done">Done</label>
                    <input type="submit" name= "submit"  value="Create new task" >
                    <button type = "submit" name ="display" class= "display"> Display data table </button>
                    

                    </center>
                </td>
            </tr>
        
       

        </table>
    </form>
</div>

    
</body>
</html>

<?php

include ('dbcon.php');
//insert new data

$conn = db();
 
if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['done'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $done = $_POST['done'];
    $sql = "INSERT INTO tasks ( title, description, done) VALUES ( '$title', '$description', '$done')";
   

   
   $conn->exec($sql);
    echo "New record created successfully";
    //header("Location: index.php");
    exit();
} 

//display data table
if (isset($_POST['display'])) {
    $sql = "SELECT * FROM tasks";
    $result = $conn->query($sql);

    if( $result->rowCount() > 0) {
        echo "<table>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>title</th>";
                echo "<th>description</th>";
                echo "<th>done</th>";
                echo "<th>action</th>";
            echo "</tr>";
        while($row = $result->fetch()) {
            echo "<tr>";
                echo "<td>" . $row['Id'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['done'] . "</td>";
                echo "<td>";
                echo "<a href='update.php?id=".$row['Id']  ."' title='Update' data-toggle='tooltip'><span class='fas fa-edit'></span></a>";
                echo "<a href='delete.php?id=". $row['Id'] ."' title='Delete' data-toggle='tooltip'><span class='fas fa-trash'></span></a>";
                echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        unset($result);
    } else{
        echo "No records matching your query  found.";
    }

}




?>
