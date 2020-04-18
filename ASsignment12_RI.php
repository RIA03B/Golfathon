<?php
                    $server_name = "itd2.cincinnatistate.edu";
                    $username = "ryibrahim";
                    $password = "0653690";
                    $dbname = "01PHP400IbrahimR";

                    $conn = new mysqli($server_name, $username, $password, $dbname);

                  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

           //Select all States from TStates Table
            $sql = "SELECT StateID, State FROM States";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
               // output the options with state names until there are no more rows left
               while ($row = $result->fetch_assoc()) {
                  echo "<option value= '{$row['StateID']}'>  {$row['State']}  </option>";
               }
            } else {
                  echo "0 results";
            }

$last_name 	= $_POST["last_name"];
$first_name 	= $_POST["first_name"];
$address 		= $_POST["address"];
$city 			= $_POST["city"];
$state 			= $_POST["state"];
$zip 			= $_POST["zip"];
$phone 			= $_POST["phone"];
$email 			= $_POST["email"];
$genderIndex 	= $_POST["gender"];
$stateIndex 	= $_POST["state"];
$shirtIndex 	= $_POST["shirtSize"];

        
$server_name = "itd2.cincinnatistate.edu";
$username = "ryibrahim";
$password = "0653690";
$dbname = "01PHP400IbrahimR";

$conn = new mysqli($server_name, $username, $password, $dbname);
		
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method
    $insertGolfer = "INSERT INTO Golfers (FirstName, LastName, Address, City, StateID, ZipCode, PhoneNumber, Email, ShirtSizeID, GenderID) 
                            VALUES ('$first_name', '$last_name', '$address', '$city', $stateIndex, '$zip', '$phone', '$email', $shirtIndex, $genderIndex);";

							
if (mysqli_query($conn, $insertGolfer)) {
} else {
   echo "Error: " . $insertGolfer . "<br>" . $conn->error;
  }
}


$sql = "SELECT GolferID,FirstName,LastName,Address, City, State, ZipCode, PhoneNumber, Email, ShirtSizeDesc, Gender 
        FROM Golfers JOIN (Genders, States, ShirtSizes)
        ON (Genders.GenderID = Golfers.GenderID AND States.StateID = Golfers.StateID AND ShirtSizes.ShirtSizeID = Golfers.ShirtSizeID); ";
        
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
        <th>Donate</th>
        </tr>";

   while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><a href='updateperson.php?ID=" . $row['GolferID'] . "'>" . $row['GolferID'] . "</a></td>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['Address'] . "</td>";
        echo "<td>" . $row['City'] . "</td>";
        echo "<td>" . $row['State'] . "</td>";
        echo "<td>" . $row['Zip'] . "</td>";
        echo "<td>" . $row['PhoneNumber'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['ShirtSizeDesc'] . "</td>";
        echo "<td>" . $row['Gender'] . "</td>";
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