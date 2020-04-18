<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Golfer</title>
	 </head>
	 <style>
 body::before{
	
  background-image: url("chenal-club-founders_orig.jpg");
	background-size: cover;
	content: "";
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: -2;
	opacity: 0.4;
	  }
body {
  color: black;
   
  text-align: center;

}
table,th, td, tr {
 text-align: center;

}
</style>
  <body>
 <strong>
	<a class="home-link" href="FirstPage.php">Home</a><br><hr>
	<div class="w3-container center w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw  w3-xxlarge w3-center w3-text-teal"></i>Event Information</h2>
        <div class="w3-container">
          <h5 class="w3-opacity "> 
          <h6>
           <?php 
		             
					$server_name = "itd2.cincinnatistate.edu";
					$username = "ryibrahim";
					$password = "0653690";
					$dbname = "01PHP400IbrahimR";

                    $conn = new mysqli($server_name, $username, $password, $dbname);

                 $sql = "SELECT SUM(PledgePerHole) AS PLEDGE FROM EventGolferSponsors";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					  echo "<table >
							<tr>
							
							<th>Event Total</th>
							
						   
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

						 
?>		 </h5>
		 <hr>
        </div><br>
		<table>

    <?php                    
					$server_name = "itd2.cincinnatistate.edu";
					$username = "ryibrahim";
					$password = "0653690";
					$dbname = "01PHP400IbrahimR";

                    $conn = new mysqli($server_name, $username, $password, $dbname);

                  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
 
            
          
$sql = "SELECT Golfers.FirstName, Golfers.LastName, TypeofTeams.TypeofTeam, EventGolferSponsors.PledgePerHole FROM EventGolferSponsors JOIN EventGolfer ON EventGolfer.EventGolferID = EventGolferSponsors.EventGolferID JOIN EventGolferTeamandClubs ON EventGolferTeamandClubs.EventGolferID = EventGolfer.EventGolferID JOIN TeamsandClubs ON TeamsandClubs.TeamsandClubID = EventGolferTeamandClubs.TeamsandClubID JOIN TypeofTeams ON TypeofTeams.TypeofTeamID = TeamsandClubs.TypeofTeamID JOIN Golfers ON Golfers.GolferID = EventGolfer.GolferID";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>
        <tr>
        
        <th>First Name</th>
        <th>Last Name</th>
        <th>Type of Team</th>
		<th>Amount Raised</th>
        <th>Donate list</th>
        </tr>";

   while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['TypeofTeam'] . "</td>";
		echo "<td>" . $row['PledgePerHole'] . "</td>";
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
 </strong>
 </table> 
  </body>
</html>
