<?php
$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$LastName = $_POST['LastName'];
$Age = $_POST['Age'];
$Birthday = $_POST['Birthday'];
$Gender = $_POST['Gender'];
$email = $_POST['email'];
$Address = $_POST['Address'];
$Citizenship = $_POST['Citizenship'];
$Religion = $_POST['Religion'];
$LRN = $_POST['LRN'];
$CurrentGradeLevel = $_POST['CurrentGradeLevel'];
$MotherName = $_POST['MotherName'];
$MotherOccupation = $_POST['MotherOccupation'];
$MotherHomeAddress= $_POST['MotherHomeAddress'];
$FatherName = $_POST['FatherName'];
$FatherOccupation = $_POST['FatherOccupation'];
$FatherHomeAddress = $_POST['FatherHomeAddress'];
$PreviousSchoolName = $_POST['PreviousSchoolName'];
$PreviousSchoolAddress = $_POST['PreviousSchoolAddress'];
$PreviousGradeLevel = $_POST['PreviousGradeLevel'];
$Guardian = $_POST['Guardian'];
$ContactNumber = $_POST['ContactNumber'];
$Relationship = $_POST['Relationship'];

if(!empty($FirstName) || !empty($MiddleName) || !empty($LastName)|| 
    !empty($Age)|| !empty($Birthday)|| !empty($Gender) || !empty($email) ||
	!empty($Address) ||!empty($Citizenship) || !empty($Religion)|| !empty($LRN) ||
	!empty($CurrentGradeLevel) || !empty($MotherName) || !empty($MotherOccupation)
	|| !empty($MotherHomeAddress) || !empty($FatherName) || !empty($FatherOccupation)
	|| !empty($FatherHomeAddress) ||!empty($PreviousSchoolName) || 
	!empty($PreviousSchoolAddress) || !empty($PreviousGradeLevel) ||
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
		$SELECT = "SELECT email From transferee_information Where email = ? Limit 1";
		$INSERT = "INSERT Into transferee_information(FirstName, MiddleName,
		LastName, Age,Birthday, Gender, email, Address,Citizenship, 
		Religion, LRN, CurrentGradeLevel, MotherName, MotherOccupation,
		MotherHomeAddress, FatherName, FatherOccupation, FatherHomeAddress,
		PreviousSchoolName, PreviousSchoolAddress, PreviousGradeLevel,
		Guardian, ContactNumber, Relationship) 
		values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
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
$stmt->bind_param("sssissssssisssssssssssis", $FirstName, $MiddleName,
		$LastName, $Age,$Birthday, $Gender, $email, $Address,$Citizenship, 
		$Religion, $LRN, $CurrentGradeLevel, $MotherName, $MotherOccupation,
		$MotherHomeAddress, $FatherName, $FatherOccupation, $FatherHomeAddress,
		$PreviousSchoolName, $PreviousSchoolAddress, $PreviousGradeLevel,
		$Guardian, $ContactNumber, $Relationship);
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