	<?php 
	$host="199.79.62.23:3306";
	$user="aavishka";
	$pass="events_aavishkar@17";
	$db="aavishka_events";
	$conn = new mysqli($host, $user, $pass, $db);
	if ($conn->connect_error) { 
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		echo "Connected to Database.";
		$temp = $_GET['temp'];
		$level = $_GET['level'];
		if(!empty($temp))
		{
			$sql3="insert into data(temp,level) value('$temp','$level')";
			if(mysqli_query($conn, $sql3) )
				echo "<br>Data Recieved!";
		}
		echo "<table><tr><th>Sr No.</th><th>Temperature</th><th>Level</th></tr>";
		$sql="select * from data";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
		   {
				echo "<tr><td>".$row['sr_no']."</td><td>".$row['temp']."</td><td>".$row['level']."</td></tr>";
		   }
		} 
		echo "</table>";
	}
	
	?>
			
