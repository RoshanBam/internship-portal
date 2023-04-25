<?php include 'headeradmin.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500&display=swap');

 table{
    width: 100%;
 }  
tr{
    background-color: #3f87a6;
    color: #fff;
    text-align: center;
    margin: auto;
}
.openbutton{
    font-family: 'Montserrat', sans-serif;
    background-color: #40c012;
    color: white;
    padding: 8px 20px;
    border: solid 3px #1aca26;
    border-radius: 4px;
    cursor: pointer;
    opacity: 0.8;
    bottom: 50%;
    right: 45%;
    width: 80px;
    display: block;
}
.openbutton:hover{
    background: #074cb4;
    color: white;
}
th, td{
    padding: 8px;
    text-align: left;
}

    </style>
</head>
<body>
    <div class="job-table">
    <table class="table-striped text-center table-bordered text-white">
        <thead class="bg-dark text-white">
            <tr>
                <th class="py-3 text-white">Job Title</th>
                <th class="py-3 text-white">Department</th>
                <th class="py-3 text-white">Total Vacancy</th>
                <th class="py-3 text-white">Deadline</th>
                <th class="py-3 text-white">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'connection.php';
                $selectquery="select * from jobinfo";
                $query=mysqli_query($conn,$selectquery);

                //$result=mysqli_fetch_array($query);

                while($row=mysqli_fetch_array($query)){
                    echo "<tr><td>".$row["jobtitle"]."</td><td>".$row["department"]."</td><td>".$row["totalvacancy"]."</td><td>".$row["deadline"]."</td>
					<td><a href='deleteInfo.php?title=".$row['jobtitle']."' class='btn btn-danger'>Delete</a></td></tr>";
                    
                }
            $conn->close();
            ?>
        </tbody>
            </div>
    </table>
</body>

</html>
