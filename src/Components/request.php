<?php
$configs = include('../config.php');
include('docurl.php');

// components/request.php
$url = $configs['url'];

// check if variable is sent through post to start correct function
if (isset($_POST['userLogin'])){
    //get data from post request
    $username = $_POST['username'];
    $password = $_POST['password'];
    //put all the data in an array
    $array = [$username, $password];
    //encode the array in json format
    $json = json_encode($array);
    //call Curl request function and put HTTP/HTTPS response in variable
    $result = DoCurl($url, "/api/auth/login", $json);
    //returns data to ajax method
    echo $result;
}
?>