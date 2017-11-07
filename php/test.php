<?php
    include("./config.php");

    if (!$db){
        die("Connection Failed: " . mysqli_connect_error());
    }

    $names = array();
    $pictures = array();
    $ids = array();
    $count = 0;
	$result = mysqli_query($db,"SELECT name,picture,id FROM projects");
    while($row = $result->fetch_assoc()) {
   		$names[$count] = $row['name'];
   		$pictures[$count] = $row['picture'];
   		$ids[$count] = $row['id'];
   		$count++;
	}

    echo json_encode($pictures);


	mysqli_close($con);

?>