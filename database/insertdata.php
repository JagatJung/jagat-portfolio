<?php
include "connection.php";
if(isset($_POST['mail'])&&isset($_POST['name'])&&isset($_POST['sub'])&&isset($_POST['dis'])){
    $mail=$_POST['mail'];
    $name=$_POST['name'];
    $sub=$_POST['sub'];
    $desc=$_POST['dis'];
    $sql="INSERT INTO `query` (`id`, `name`, `emai`, `detail`, `subject`) VALUES (NULL, '$name', '$mail', '$desc', '$sub')";
    if(mysqli_query($conn, $sql)){
        header("location:../index.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
?>