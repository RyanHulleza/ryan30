<?php
$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$LastName = $_POST['LastName'];
$Age = $_POST['Age'];
$Birthday = $_POST['Birthday'];
$Gender = $_POST['Gender'];
$email = $_POST['email'];
$Address = $_POST['Address'];
$LRN = $_POST['LRN'];
$PreviousSection = $_POST['PreviousSection'];
$PreviousGradeLevel = $_POST['PreviousGradeLevel'];
$PreviousSchoolYear = $_POST['PreviousSchoolYear'];
$Guardian = $_POST['Guardian'];
$ContactNumber = $_POST['ContactNumber'];
$Relationship = $_POST['Relationship'];

if(!empty($FirstName) || !empty($MiddleName) || !empty($LastName)|| 
    !empty($Age)|| !empty($Birthday)|| !empty($Gender) || !empty($email) ||
	!empty($Address) || !empty($LRN) || !empty($PreviousSection) ||
 	!empty($PreviousGradeLevel) || !empty($PreviousSchoolYear) ||
	!empty($Guardian) || !empty($ContactNumber)||!empty($Relationship)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "enrollment_system";
	//create connection
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$SELECT = "SELECT email From oldstudent_information Where email = ? Limit 1";
		$INSERT = "INSERT Into oldstudent_information(FirstName, MiddleName, LastName, Age,
		Birthday, Gender, email, Address,LRN, PreviousSection, PreviousGradeLevel, PreviousSchoolYear,
		Guardian, ContactNumber, Relationship) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
//Prepare Statement
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($email);
$stmt->store_result();
$rnum = $stmt->num_rows;

if ($rnum==0){
$stmt->close();
$stmt = $conn->prepare($INSERT);
$stmt->bind_param("sssissssissssis", $FirstName, $MiddleName, $LastName, $Age,
		$Birthday, $Gender, $email, $Address, $LRN, $PreviousSection,
		$PreviousGradeLevel, $PreviousSchoolYear, $Guardian, $ContactNumber, $Relationship);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
	}
	}
	else{
		echo "All Fields Are Require";
		die();
	}
		
?>