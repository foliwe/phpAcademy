<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

	//mysql credentials
	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "Foli1882";
	$mysql_database = "itacademy";
	
	// $u_name = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
	// $u_email = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
	// $u_text = filter_var($_POST["user_text"], FILTER_SANITIZE_STRING);

    $full_name = filter_var($_POST["full_name"], FILTER_SANITIZE_STRING); 

    $date_of_birth = $_POST['date_of_birth'];
    $mysqlDOB = date('Y-m-d', strtotime($date_of_birth));

    #$date_of_birth = filter_var($_POST["date_of_birth"], FILTER_SANITIZE_STRING);
    $sex = filter_var($_POST["sex"], FILTER_SANITIZE_STRING);

    $date_of_stated = $_POST['date_of_stated'];
    $mysqlDate = date('Y-m-d', strtotime($date_of_stated));
    
    $country = filter_var($_POST["country"], FILTER_SANITIZE_STRING);

    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL); 
    $contact_number = filter_var($_POST["contact_number"], FILTER_SANITIZE_STRING);
    $it_knowledge = filter_var($_POST["it_knowledge"], FILTER_SANITIZE_STRING);
    $comment = filter_var($_POST["comment"], FILTER_SANITIZE_STRING);

	if (empty($full_name)){
		die("Please enter your name");
	}
	if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		die("Please enter valid email address");
	}
    if (empty($country)){
		die("Please enter your Country");
	}

    if (empty($contact_number)){
		die("Please enter your Contact Number");
	}

    if (empty($date_of_stated)){
		die("Please enter your Enrollement Date");
	}

    if (empty($date_of_birth)){
		die("Please enter your Date of Birth");
	}
	
    if (empty($it_knowledge)){
		die("Please enter your IT Knowlegde");
	}
	if (empty($sex)){
		die("Please enter Your Sex");
	}	

	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}	
	
	$statement = $mysqli->prepare("INSERT INTO studentphp (full_name, date_of_birth, email, sex, date_of_stated, country, contact_number, it_knowledge, comment) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('sssssssss', $full_name, $mysqlDOB, $email, $sex, $mysqlDate, $country, $contact_number, $it_knowledge, $comment); //bind values and execute insert query
	
	// if($statement->execute()){
	// 	print "Hello " . $full_name . "!, your message has been saved!";
	// }else{
	// 	print $mysqli->error; //show mysql error if any
	// }

    if ($statement->execute()) {
        // Redirect to the thank you page
        header("Location: thank_you.php?name=" . urlencode($full_name));
        exit();
    } else {
        print $mysqli->error; // Show MySQL error if any
    }
}
?>