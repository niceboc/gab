<?php
require_once('config.php');
?>
<?php

if(isset($_POST)) {
    $firstname          = $_POST['firstname'];
    $middlename         = $_POST['middlename'];
    $lastname           = $_POST['lastname'];
    $gender             = $_POST['gender'];
    $age                = $_POST['age'];
    $birthdate          = $_POST['birthdate'];
    $civilstatus        = $_POST['civilstatus'];
    $municipality       = $_POST['municipality'];
    $contactnumber      = $_POST['contactnumber'];
    $email              = $_POST['email'];
    $password           = $_POST['password'];

    $sql = "INSERT INTO users (firstname, middlename, lastname, gender, age, 
    birthdate, civilstatus, municipality, contactnumber, email, password)
    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert -> execute([$firstname, $middlename, $lastname, $gender, 
        $age, $birthdate, $civilstatus, $municipality, $contactnumber, $email, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}