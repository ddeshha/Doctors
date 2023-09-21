<?php


$conect = new mysqli("localhost", "root", "", "visit");


$do = "SELECT * FROM doctors";

$query = $conn -> query($do);

// $row = $query -> fetch_assoc();

while ($row = $query -> fetch_assoc()) {
    
    echo "<pre>";
    print_r($row);
    echo"</pre>";
}

