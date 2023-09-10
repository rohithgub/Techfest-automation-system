<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$rollno = $_POST['rollno'];
	$email = $_POST['email'];
	$department = $_POST['department'];
	$number = $_POST['number'];
	$eventname = $_POST['eventname'];
	$teamtype = $_POST['teamtype'];
	$teamname = $_POST['teamname'];
	$collegename = $_POST['collegename'];
	// Database connection
	$conn = new mysqli('localhost','root','','sample');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, rollno, email, department, number, eventname, teamtype,teamname,collegename) values(?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("ssssssisss", $firstName, $lastName,$rollno, $email, $department, $number,$eventname, $teamtype,$teamname,$collegename);
		$execval = $stmt->execute();
		echo $execval;
		
		
		$stmt->close();
		$conn->close();
	}


?>
<html>
	<head>
        <style>
			#btn {
  display: inline-block;
  padding: 12px 24px;
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  color: #fff;
  background-color: #4CAF50;
  border-radius: 4px;
  transition: background-color 0.2s;
}

#btn:hover {
  background-color: #3e8e41;
}

@media screen and (max-width: 600px) {
  #btn {
    font-size: 16px;
    padding: 10px 20px;
  }
}
.image-container img {
      max-width: 60%;
      margin-bottom: 20px;
}
#back{
	background-image: url('thankbg.png');
	background-repeat:no-repeat;
    max-width: 100%;
	background-size:cover;
	
}
		</style>
	</head>
	<body id="back">
		<center>
	<div class="image-container">
		 <img src="thankyou.PNG" alt="THANK YOU">
	</div>	
             <br>
		<a href="payment.php" id="btn">Go For Payment</a>
		</center>
	</body>
</html>