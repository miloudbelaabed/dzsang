<?php 
require 'connection.php';
$bloodType = $_POST['blood_type'];
//echo $bloodType;
$state = $_POST['agent_state'];
if($state)




if($_POST['agent_town']){
 $town = $_POST['agent_town'];
}


$query = "SELECT full_name,email,phone,bloodType,gender,wilayas.nom,communes.nom_com FROM volunteer,wilayas,communes WHERE bloodType='$bloodType' AND wilayas.id='$state' AND communes.id = '$town'";
 $result = mysqli_query($connection,$query);
 $myArray = [];
 while($row = $result->fetch_assoc()) {
    $myArray[] = $row;

}

 header('Content-Type: application/json');
$valentaire = json_encode($myArray);
echo $valentaire;

mysqli_free_result($result);
mysqli_close($connection);

?>

