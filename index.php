<?php  include 'connection.php';    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    
<body>
    <div>

    <form action="" method="POST">
        
        <input type="text" name = "firstname" placeholder ="firstname"> <br><br>
        
        <input type="text" name = "lastname" placeholder ="lastname">
       <br><br>
        <input type="number" name = "age" placeholder ="age">
        <br><br>
        <input type="submit" name="save_btn" value="Save">
        <button><a href="view.php">view</a></button>
        </form>
    </div>
    <?php
    if(isset($_POST["save_btn"])){
        $fname=$_POST["firstname"];
        $lname=$_POST["lastname"];
        $age=$_POST["age"];

    $query= "INSERT INTO student(
    firstname,lastname,age) VALUES('$fname','$lname','$age')";
    $data = mysqli_query($conn,$query);
    
    if(!$data){
        ?>
        <script>
        alert("please try again");
        </script>
  
        <?php
    }
    else{
        ?>
        <script>
        alert("data saved successfully");
        </script>
  
        <?php
    }
  
}

    ?>
</body>
</html>