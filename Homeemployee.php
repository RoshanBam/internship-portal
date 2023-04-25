<?//php session_start();
/*if(!isset($_SESSION["userName"])){
    header("Location:Homeemployee.php");
  }*/
?>
<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="homeemployee.css">
    <link rel="stylesheet" href="card.css">
    <style>
        table{
            padding: 20px;
        }
    </style>
</head>

<body>
    
       <div class="headerclass"> 
        <h1 class="header-title">
            LEARN THROUGH <span>EXPERIENCE </span>

        </h1>

       </div>
       
   
    <button class="open-button" onclick="openForm()">Upload Resume</button>

        <div id="container">
            <form action="resume.php" method="POST">
                <label for="file">Browse file</label>
                <input type="file" name="file"><br>
                <input type="submit"><br>
                <button class="close" onclick="closeform()">Close</button>
            </form>
        </div>
        
        
<script>
    function openForm(){
        document.getElementById("container").style.display="block";
    }
    function closeForm(){
        document.getElementById("container").style.display="none";
    }
</script>
</body>

</html>
