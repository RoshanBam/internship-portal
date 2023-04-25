<?php
    $jobtitle = $department = $total = $deadline ="";
    $error = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        function validate($data){
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            $data = trim($data);
            return $data;
    
        }
        //validation of job title
        if(empty($_POST["jobtitle"])){
            $error.="Job Title is empty";
        }
        else{
            $jobtitle = validate($_POST["jobtitle"]);
        }
        //validate department
        if(empty($_POST["department"])){
            $error = "Department is not written";
        }
            else{
                $department = validate($_POST["department"]);
            }


        // validate total vacancy
        if(empty($_POST["total"])){
            $error = "Total Vacancy is empty";
        }
       
            else{
                $total = validate($_POST["total"]);
            }
            //validate Password
if(empty($_POST["deadline"])){
	$error .= "Deadline is empty!";
}
	else{
		$deadline = validate($_POST["deadline"]);
		
	}

    }
//require("connection.php");
$conn = new mysqli("localhost","root","","internshipportal");
$sql="INSERT INTO jobinfo(jobtitle,department,totalvacancy,deadline)VALUES('$jobtitle','$department','$total','$deadline');";

if($conn->query($sql) === TRUE){
	$_SESSION["Vacancyposted"] = "Successfully posted vacancy!";
	header("Location:vacancypost.php");
}
else{
	$_SESSION["postingError"] = "Sorry couldn't post vacancy!";
	header("Location:vacancypost.php");
	
}
$conn->close();