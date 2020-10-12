<?php require_once("database.php");

echo "Fonkstiondan önce";
echo "<br>";



$email = $_POST["email"];

$insert = $vtConnect->prepare("insert into info(email) values (?)");
$insert->execute(array($email));

echo json_encode($email);


?>


<!---


$sonuc[] = array();
$email = $_POST["email"];

$sonuc['a'] = $email;

$yaz = "INSERT INTO info(email) values (?)";

$insert = $vtConnect->prepare($yaz);
$insert->execute(array($email,));

$query = $insert->rowCount();

if($query>0){
    $sonuc['ok'] = true;
} else {
    $sonuc['error'] = true;
}

echo $email;
echo json_encode($sonuc);

--->