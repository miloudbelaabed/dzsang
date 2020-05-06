<?php
require_once 'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

     $full_name =  $_POST['full_name'];
     $email =  $_POST['email'];
     $phone =  $_POST['phone'];
     $password =  $_POST['pass_one'];
    $passwordHashed = password_hash($password,PASSWORD_BCRYPT);
     $blood =  $_POST['blood_type'];
     $state = 1; //$_POST['agent_state'];
     $town =  2;//$_POST['agent_town'];
     $gender = 'MALE';
         //$_POST['gender'];
     if ($full_name != "" && $email != "" && $phone != "" &&$password !="" && $blood !="" && $state != "" && $town != "" && $gender != ""){
         $query = "INSERT INTO volunteer (full_name,email,phone,password,town,bloodType,gender,wilaya_id) VALUES ('$full_name','$email','$phone','$passwordHashed','$town','$blood','$gender','$state')";

         $pdo = connection::connect();
         if ($pdo){
            $data = $pdo->exec($query);
            var_dump($data);
        }else{
            echo "Connection To Database Not Established";
        }
        /*$data = mysqli_query($connection,$query);
        if($data){
            echo "data inserted sucssesfull !";
        }else{
            echo "data Not inserted !";
        }*/
     }
 }


?>
