<?php
if(isset($_GET['submit_btn'])){
    $name = $_GET['name'];
    $pass = $_GET['pass'];
    echo "The Name entered is :".$name."<br />";
    echo "The Password entered is :".$pass."<br />";
}

if(isset($_POST['submit_btn'])){
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    echo "The Name entered is :".$name."<br />";
    echo "The Password entered is :".$pass."<br />";
}



?>