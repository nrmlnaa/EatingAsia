 <?php

 		// DATABASE CONNECTION
 		$conn = mysqli_connect('localhost', 'root', '', 'eatingasiaDB');

 		//GET PAST RECORDS
 		$name = $_POST['name'];
 		$email = $_POST['email'];
 		$stateCity = $_POST['stateCity'];
 		$country = $_POST['country'];
 		$description = $_POST['description'];

 			if ($conn -> connect_error){
 				die('Connection Failed : '.$conn->connect_error);
 			}

 			$sql = "INSERT INTO 'suggestion' ('id', 'name', 'email', 'stateCity', 'country', 'description') VALUES ('0', '$name', '$email', '$stateCity', 'country', 'description')";

 			//insert in database
 			$rs = mysql_query($conn, $sql);

 			if ($rs == TRUE) {
 				echo "Your suggestion successfully submitted!";
 			}else{
 				echo "Error: ".$sql. "<br>".$conn->error;
 			}

 			'<script type="text/javascript">
                alert("Your suggestion was successfully submitted! Thank you for your suggestion.")
        </script>';


?>