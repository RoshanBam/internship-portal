<?php include 'header.php';?>

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
                <th class="py-3 text-white">Apply</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'connection.php';
                $selectquery="select * from jobinfo";
                $query=mysqli_query($conn,$selectquery);

                //$result=mysqli_fetch_array($query);

                while($result=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $result['jobtitle']; ?></td>
                        <td><?php echo $result['department']; ?></td>
                        <td><?php echo $result['totalvacancy']; ?></td>
                        <td><?php echo $result['deadline']; ?></td>
                        <td><a href='browsedata.php?id=".$row['id']."' class='btn btn-danger'>apply</a></td>  
                    </tr>

                    <?php
                }
            ?>
        </tbody>
            </div>
    </table>
</body>

</html>
