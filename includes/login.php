<?php
//Check if CONSTANT called SITE_URL is defined.
require_once 'connection.php';
$phone = $password = "";
$error = "";
// initialize le the session

session_start();
/*if (isset($_SESSION) && $_SESSION['loggedin'] === true){
    // if the user is already logged in so redirect him to the welcome page
    header('location: welcome.php');
    exit;
}*/
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty((trim($_POST['phone']))) || empty(trim($_POST['password']))){
        $error = '<p class="text-danger">Please entre username and the password</p>';
    }else {
         $phone = $_POST['phone'];
         $password = $_POST['password'];
    }
    //check if password is empty
    if(empty($error)){

    if(getlogin($phone)!= false){
        $data = (getlogin($phone));
        if (password_verify($password,$data['password'])){
            //session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['fullName'] = $data['full_name'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['bloodType'] = $data['bloodType'];;
            $_SESSION['gender'] = $data['gender'];
            $merged = array("loginin"=>true);
            header('Content-Type: application/json');
            echo json_encode($merged);
            //. DIRECTORY_SEPARATOR .
           //   header( $_SERVER['HTTP_HOST']  . dirname($_SERVER['PHP_SELF']) .'/'. 'welcome.php');
            // when the information is correct so redirect him to welcome page with his information
        }else{
            echo "password doesnt much";
        }

    }else{
        echo 'you have an error condition of function';
    }

    }else{
    echo "you have error";
    }
}else{
    echo "page Not found";
}

function getlogin($phone){
    $stm = connection::connect();
    $res = $stm->prepare("SELECT * FROM volunteer WHERE phone='$phone'");
    $res->execute();
    return $res->fetch(PDO::FETCH_ASSOC);
}

?>