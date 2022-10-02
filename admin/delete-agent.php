<?php

require_once("./config.php");
$id = $_GET['id'];

$sqlDelete = "DELETE FROM agents WHERE id = '$id'";
$statement = $conn->prepare($sqlDelete);
$results = $statement->execute();

if($results){
    $_SESSION['message'] = "Deleted Successfully!!";
    $_SESSION['alert'] = "alert alert-success";
    header("location: view-agents.php");
    
}else{
    $_SESSION['message'] = "Sorry!! Something went wrong!!";
    $_SESSION['alert'] = "alert alert-danger";

}


;?>