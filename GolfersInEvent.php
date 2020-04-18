<html>
<title>Golfers</title>
<body>
<a class="home-link" href="Assignment10.php">Home</a><br><hr>
<?php

$LastName 		= $_POST["LastName"];
$FirstName 		= $_POST["FirstName"];
      
$server_name = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($server_name, $username, $password, $dbname);
		
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method
    $insertGolfer = "INSERT INTO Golfers (FirstName, LastName, Address, City, StateID, ZipCode, PhoneNumber, Email, ShirtSizeID, GenderID) 
                            VALUES ('$FirstName', '$LastName', '$Address', '$City', $State, '$ZipCode', '$Phone', '$Email', $ShirtSizeID,$GenderID);";

							
if (mysqli_query($conn, $insertGolfer)) {
} else {
   echo "Error: " . $insertGolfer . "<br>" . $conn->error;
  }
}


?>

    <?php
                    $server_name = "";
					$username = "";
					$password = "";
					$dbname = "";

                    $conn = new mysqli($server_name, $username, $password, $dbname);

                  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
 
            
          
$sql = "SELECT * FROM Golfers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>
        <tr>
        
        <th>First Name</th>
        <th>Last Name</th>
       
        </tr>";

   while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
       
        echo "</tr>";
       }
    echo "</table>";
} else {
    echo "0 results";
}

// Free result set
mysqli_close($conn);

     
?>
 
 
 
</body>
</html>
 <?php 
		             
					$server_name = "";
					$username = "";
					$password = "";
					$dbname = "";

                    $conn = new mysqli($server_name, $username, $password, $dbname);

                 $sql = "SELECT SUM(PledgePerHole) AS PLEDGE FROM EventGolferSponsors";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					  echo "<table>
							<tr>
							
							<th>Total Pledged</th>
							
						   
							</tr>";

					   while ($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>" . $row['PLEDGE'] . "</td>";
							echo "</tr>";
						   }
						echo "</table>";
					} else {
						echo "0 results";
					}

					// Free result set
					mysqli_close($conn);

						 
?>
