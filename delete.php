<?php include 'connection.php';
$id = $_GET['id'];
$query = "DELETE FROM student WHERE id = '$id'";
$data = mysqli_query($conn,$query);
if ($data){
    ?>
    <script>
        alert("Data Deleted Successfully")
        window.open("http://localhost/php/firstphp/crudoperation/view.php","_self");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("Please try again");
    </script>

    <?php
}



?>
