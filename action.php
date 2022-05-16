<?php
// Include the database connection file
include('db_config.php');

if (isset($_POST['countryId']) && !empty($_POST['countryId'])) {

	// Fetch state name base on country id
	$query = "SELECT * FROM states WHERE country_id = ".$_POST['countryId'];
	$result = $con->query($query);
	if ($result->num_rows > 0) {
		$_SESSION['countryId'] = $_POST['countryId'];
		echo '<option disabled selected value="">Lütfen Seçiniz</option>'; 
		while ($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['id'].'">'.$row['state_name'].'</option>'; 
			$row['state_name']=$islemname;
		}
	} else {
		echo '<option value="">Lütfen Seçim Yapınız</option>'; 
	}
	
} 
elseif(isset($_POST['stateId']) && !empty($_POST['stateId'])) {

	// Fetch city name base on state id
	$query = "SELECT * FROM cities WHERE state_id = ".$_POST['stateId'];
	$result = $con->query($query);

	if ($result->num_rows > 0) {
		$_SESSION['stateId'] = $_POST['stateId'];
		echo '<option disabled selected value="">Lütfen Seçiniz</option>'; 
		while ($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['id'].'">'.$row['city_name'].'</option>'; 
			
		}
	} else {
		echo '<option value="">Lütfen Seçim Yapınız</option>'; 
	}
}
// $_SESSION['personel']=$row['personel_name']; ????
elseif(isset($_POST['cityId']) && !empty($_POST['cityId'])){
	$query = "SELECT * FROM personel WHERE city_id = ".$_POST['cityId'];
	$result = $con->query($query);
	if ($result->num_rows > 0) {
		$_SESSION['cityId'] = $_POST['cityId'];
		
		echo '<option disabled selected value="">Lütfen Seçiniz</option>'; 
		while ($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['id'].'">'.$row['personel_name'].'</option>'; 
		}
		
	}
	
}
?>