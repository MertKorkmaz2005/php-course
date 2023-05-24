<?php

if(isset($_POST['submit'])) {

    $names = array("mert","peter","ali","bilal","mustafa","tom");

    $minimium = 5;
    $max = 10;
    $username = $_POST['username'];
    $password = $_POST['password'];


    if(strlen($username) < $minimium){


        echo "username has to be longer than five charachters";

    }

    if(strlen($username) > $max){


        echo "username can not be longer than 10";

    }

    if(!in_array($username, $names)){
        echo "you can not login";


    } else{
        echo "welcome back";
    }

    // echo "hello" . $username;
    // echo  "your password is". $password;



}
?>