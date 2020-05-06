<?php
// initialize le the session
// include config file
require_once "connection.php";
$phone = $password = "";
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty((trim($_POST['phone']))) || empty(trim($_POST['password']))){
        $error = '<p class="text-danger">Please entre username and the password</p>';
    }else {
          $phone = $_POST['phone'];
        $password = $_POST['password'];
    }
    //check if password is empty
    if(empty($error)){

    if(verifylogin($phone,$password)!= false){
        $data = (verifylogin($phone,$password));

        if (password_verify($password,$data['password'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['fullName'] = $data['full_name'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['bloodType'] = $data['bloodType'];;
            $_SESSION['gender'] = $data['gender'];
            header('location: welcome.php');

            //. DIRECTORY_SEPARATOR .
           //   header( $_SERVER['HTTP_HOST']  . dirname($_SERVER['PHP_SELF']) .'/'. 'welcome.php');

        }else{
            echo "password doesnt much";
        }

    }else{
        echo 'you have an error condition of function';
    }

   /*session_start();
    $_SERVER['loggedin'] = true;
    $_SERVER['username'] = "walid";
    $_SERVER['password'] = "123456789";
    $_SERVER['password'] = "123456789";
    header('location: welcome.php');*/


    }else{
    echo "you have error";
    }

}

function verifylogin($phone,$pass){
    $stm = connection::connect();
    $res = $stm->prepare("SELECT * FROM volunteer WHERE phone='$phone'");
    $res->execute();
    return $res->fetch(PDO::FETCH_ASSOC);

}

?>