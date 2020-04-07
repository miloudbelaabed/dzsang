<?php 
require 'connection.php';
$bloodType = $_POST['blood_type'];
$town = $_POST['agent_town'];
$state = $_POST['agent_state'];
//echo $bloodType;
//echo $town;
//echo $state;
//var_dump($bloodType);
//select full_name,email,phone,bloodType,gender,wilayas.nom,communes.nom_com FROM volunteer,wilayas,communes WHERE bloodType='O+' AND wilayas.id='1' AND communes.id=volunteer.town
$query = "SELECT `volunteer`.`full_name`, `volunteer`.`email` FROM `volunteer` WHERE `volunteer`.`bloodType`='$bloodType' AND `volunteer`.`wilaya_id`='$state' AND `volunteer`.`town`='$town'";
//$query = "SELECT full_name,email,phone,bloodType,gender,wilayas.nom,communes.nom_com FROM volunteer,wilayas,communes WHERE bloodType='$bloodType' AND wilayas.id='$state'";
 $result = mysqli_query($connection,$query);
 $myArray = [];
 while($row = $result->fetch_assoc()) {
    $myArray[] = $row;

}
//AND communes.id = '$town'
 header('Content-Type: application/json');
$valentaire = json_encode($myArray);
echo $valentaire;

mysqli_free_result($result);
mysqli_close($connection);

?>

