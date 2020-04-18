<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Golfer</title>
	 </head>
	 <style>
	 
	 </style>
  <body>
	<a class="home-link" href="http://itd1.cincinnatistate.edu/PHP-IbrahimR/Content/Finally-Final/FirstPage.php">Home</a><br><hr>
<table>
	
                 <?php                    
					$server_name = " ";
					$username = " ";
					$password = " ";
					$dbname = " ";

                    $conn = new mysqli($server_name, $username, $password, $dbname);

                  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
 
            
          
$sql = "SELECT Golfers.FirstName, Golfers.LastName, Golfers.Address, Golfers.City, States.StateID, Golfers.ZipCode, Golfers.PhoneNumber, Golfers.Email, ShirtSize.ShirtSizeID, Genders.Gender, TypeofTeams.TypeofTeam FROM EventGolferSponsors JOIN EventGolfer ON EventGolfer.EventGolferID = EventGolferSponsors.EventGolferID JOIN EventGolferTeamandClubs ON EventGolferTeamandClubs.EventGolferID = EventGolfer.EventGolferID JOIN TeamsandClubs ON TeamsandClubs.TeamsandClubID = EventGolferTeamandClubs.TeamsandClubID JOIN TypeofTeams ON TypeofTeams.TypeofTeamID = TeamsandClubs.TypeofTeamID JOIN Golfers ON Golfers.GolferID = EventGolfer.GolferID JOIN States ON States.StateID = Golfers.StateID JOIN Genders ON Genders.GenderID = Golfers.GenderID JOIN ShirtSize ON ShirtSize.ShirtSizeID = Golfers.ShirtSizeID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>
        <tr> 
        <th>Golfer ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zip Code</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Shirt Size</th>
        <th>Gender</th>
		<th>Team</th>
        <th>Donate</th>
        </tr>";

   while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><a href='process_updateplayer.php?ID=". $row['GolferID'] . "'>" . $row['GolferID'] . "</a></td>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['Address'] . "</td>";
        echo "<td>" . $row['City'] . "</td>";
        echo "<td>" . $row['StateID'] . "</td>"; 
        echo "<td>" . $row['ZipCode'] . "</td>";
        echo "<td>" . $row['PhoneNumber'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['ShirtSizeID'] . "</td>";
        echo "<td>" . $row['GenderID'] . "</td>";
		echo "<td>" . $row['TypeofTeam'] . "</td>";
        echo "<td><a href='donate.php?ID=" . $row['GolferID'] . "'> Donate </a></td>";
        echo "</tr>";
       }
    echo "</table>";
} else {
    echo "0 results";
}

// Free result set
mysqli_close($conn);

     
?>
 
