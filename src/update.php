<?php
include ('dbcon.php');

$conn = db();

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['done'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $done = $_POST['done'];
    $sql = "UPDATE tasks SET title = '$title', description = '$description', done = '$done' WHERE Id = '$id'";
    $conn->exec($sql);
    echo "Record updated successfully";
    //header("Location: index.php");
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM tasks WHERE Id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update task</title>
    <style>
        .form-style-2{
            max-width: 500px;
            padding: 20px 12px 10px 20px;
            background:rgb(209, 190, 190);
            position : relative;
            left: 25%;
            border-radius: 8px;
        }
        .form-style-2-heading{
            font-weight: bold;
            border-bottom: 2px solid #ddd;
            margin-bottom: 20px;
            font-size: 15px;
            padding-bottom: 3px;
        }
        .form-style-2 label{
            display: block;
            margin: 0px 0px 15px 0px;
        }
        .form-style-2 label > span{
            width: 100px;
            font-weight: bold;
            float: left;
            padding-top: 8px;
            padding-right: 5px;
        }
        .form-style-2 span.required{
            color:red;
        }
        .form-style-2 .tel-number-field{
            width: 40px;
            text-align: center;
        }
        .form-style-2 input.input-field, .form-style-2 .select-field{
            width: 48%;
            height: 30px;
        }
        .form-style-2 input.input-field, .form-style-2 .textarea-field, .form-style-2 .select-field{
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border: 1px solid #C2C2C2;
            border-radius: 3px;
        }
        .form-style-2 .input-field:focus, .form-style-2 .textarea-field:focus, .form-style-2 .select-field:focus{
            border: 1px solid #0C0;
        }
        .form-style-2 .textarea-field{
            height:60px;
            width: 55%;
        }
        .form-style-2 input[type=submit],
        .form-style-2 input[type=button]{
            border: none;   
            padding: 8px 15px 8px 15px;
            background: rgb(162, 128, 187);
            color: #fff;
            border-radius: 3px;
        
        }
        .form-style-2 input[type=submit]:hover,
        .form-style-2 input[type=button]:hover{
            background: #EA7B00;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="form-style-2">
    <div class="form-style-2-heading">Update task</div>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['Id'] ?>">
    <label for="title">
        <span>Title</span>
        <input type="text" name="title" value="<?php echo $row['title'] ?>" class="input-field" required>
    </label>

    <label for="description">
        <span>Description</span>
        <textarea name="description" class="textarea-field" required><?php echo $row['description'] ?></textarea>
    </label>

    <label for="done">
        <span>Done</span>
        <input type="checkbox" name="done" value="1" <?php if ($row['done'] == 1) echo 'checked' ?>>
    </label>

    <label>
        <span>&nbsp;</span>
        <input type="submit" value="Update" class="submit-button">
    </label>
</form>
</div>
</body>
</html>
<?php
$conn = null;
?>
