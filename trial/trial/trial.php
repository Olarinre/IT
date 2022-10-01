<?php
//echo " php file has been included"
$host = "localhost";
$username ="root";
$password = "";
$dbname = "trial_db";

//create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	//echo "Connected successfully";
	echo "<br>";
}

//sve to database

if(isset($_POST['submit'])){
	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);	
	$othername = mysqli_real_escape_string($conn, $_POST['othername']);
	$surname = mysqli_real_escape_string($conn, $_POST['surname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$sex = mysqli_real_escape_string($conn, $_POST['sex']);
				
	if($firstname == "" || $othername == "" || $surname == "" || $email == "" || $sex == ""){
					echo 'please enter the required fields';
	}else {
		$sql = "INSERT into trial_db_table (firstname, othername, surname, email, sex) values('$firstname', '$othername', '$surname', '$email', '$sex')";
		$query = mysqli_query($conn, $sql);
		if($query){
			echo ' data submitted';
			echo "<br>";
		}else{
			echo 'Error occured, try again';
			echo "Error: " . $sql . "" . mysqli_error($conn);
		}
	}
} 
echo"<table align ='center' border ='2px' width = '500px'> ";
echo "<tr>";
		echo "<th align ='center' colspan = '6'>"."retrieved registratration details"."</th>";

	echo "</tr>";
	echo"<tr>";
		echo "<th>"."id"."</th>";
		echo "<th>"."firstname"."</th>";
		echo "<th>"."othername"."</th>";
		echo "<th>"."surname"."</th>";
		echo "<th>"."email"."</th>";
		echo"<th>"."sex"."</th>";

	echo "</tr>";






$sqlretrieve = "select * from trial_db_table";
$queryretrieve = mysqli_query($conn, $sqlretrieve);
$resultretrieve =mysqli_num_rows($queryretrieve);
if ($resultretrieve > 0){
	while ($rowsretrieve = mysqli_fetch_assoc($queryretrieve) ){
		echo "<tr>";
		echo "<td>".$rowsretrieve['id'] ."</td>";
		echo "<td>".$rowsretrieve['firstname']."</td>";
		echo "<td>".$rowsretrieve['othername']."</td>";
		echo "<td>".$rowsretrieve['surname']."</td>";
		echo "<td>".$rowsretrieve['email']."</td>";
		echo "<td>".$rowsretrieve['sex']."</td>";
		
		echo "</tr>";
		
}
echo "</table>";
	}


// to get the no of males in the entries
$toget = "SELECT * from trial_db_table";
$togetquery = mysqli_query( $conn, $toget);
if (mysqli_num_rows($togetquery) > 0){

	$noofpeople = 0;
	while($togetrows = mysqli_fetch_assoc($togetquery)){
		//if (($_POST['sex'] == 'm'){
			$noofpeople = $noofpeople + 1;
		//}
	}echo "the no of PEOPLE that registered  are: ".$noofpeople;
}







$conn->close();	
	
?>