<?php

$conn = new mysqli("localhost", "root", "", "visit");

$do = "SELECT * FROM doctors";

$query = $conn -> query($do);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="BootStrap/bootstrap.min.css">
</head>
<body>
<div class="container mt-5 mr-1">
    <div class="row">
        <div class="col-12">
        <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Adress</th>
                <th scope="col">Registration date</th>
                <th scope="col">Department</th>
            </tr>
        </thead>
        <tbody>
<?php

while($row = $query->fetch_assoc()){

?>
            <tr>
                <td><?= $row['id']?></td>
                <td><?= $row['username']?></td>
                <td><?= $row['email']?></td>
                <td><?= $row['addres']?></td>
                <td><?= $row['registered_id']?></td>
                <td><?php
                
                $name = $row['dep_id'];

                $depName = "SELECT name FROM departments WHERE id = $name";

                $query2 = $conn -> query($depName);

                $row = $query2 -> fetch_assoc();

                echo $row["name"];
                    
                ?></td>
               
            </tr>

            <?php }; ?>
   
        </tbody>
</table>
        </div>
    </div>
</div>
</body>
</html>


