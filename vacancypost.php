<?php include 'headeradmin.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link rel="stylesheet" href="vacancy.css">
    <style>
        input, select, p {
    color: #38b2a5;
    font: inherit;
    margin: 0;
}
    </style>
</head>
<body>
    <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-5">
   <div class="card">
    
      <div class="card-body py-md-4">
       <form _lpchecked="1" method="POST" action="vacancydata.php">
          <div class="form-group">
             <input type="text" class="form-control" name="jobtitle" id="jobtitle" placeholder="jobtitle">
        </div>
        <div class="form-group">
             <input type="text" class="form-control" name="department" id="department" placeholder="department">
                            </div>
                            
                          
   <div class="form-group">
     <input type="text" class="form-control" name="total" id="total" placeholder="Total Vacancy">
   </div>
   <div class="form-group">
      <input type="Date" class="form-control" name="deadline" id="deadline" placeholder="Deadline">
   </div>
   <div class="d-flex flex-row align-items-center justify-content-between">
   <input class="button" type="submit" value="POST">
          </div>
       </form>
     </div>
  </div>
</div>
</div>
</div>
</body>
</html>