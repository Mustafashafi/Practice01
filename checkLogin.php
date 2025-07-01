<?php
session_start();
if(isset($_POST['submit_btn'])){
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    // write sql query to check whther the user exist in yout database or not
    if($name == "saeed" && $pass == "akbar"){
        header("Location:home.php");
    }else{
        $_SESSION['error'] = '<div class="alert alert-danger" role="alert">
        Invlaid Email or Password!
      </div>';
        header("Location:form.php");
    }
}


?>