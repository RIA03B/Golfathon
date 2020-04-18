<!DOCTYPE html>
<html>
<body>
<form id="submit-form" action="" method="post">	
Insert Sponsors Information!!
		<table border="1">
		<tr>
			<td>
				<label for="FirstName"> First Name: </label>
			</td>
			<td>
				<input type="text" name="FirstName" size="20" maxlength="50" required />
			</td>
		</tr>
		<tr>
			<td>
				<label for="LastName"> Last Name: </label>
			</td>
			<td>
				<input type="text" name="LastName" size="20" maxlength="50" required />
			</td>
		</tr>
		<tr>
			<td>
				<label for="Address"> Address: </label>
			</td>
			<td>
				<input type="text" name="Address" size="20" maxlength="50" required />
			</td>
		</tr>
		<tr>
			<td>
				<label for="City"> City: </label>
			</td>
			<td>
				<input type="text" name="City" size="20" maxlength="50" required />
			</td>
		</tr>
		<tr>
			<td>
				<label for="State"> State: </label>
			</td>
			<td>
				<select name="StateID">
					<option value='1'>Ohio</option><option value='2'>Kentucky</option><option value='3'>Indiana</option>				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label for="Zip"> Zip Code: </label>
			</td>
			<td>
				<input type="text" name="ZipCode" size="20" maxlength="50" required  />
			</td>
		</tr>
		<tr>
			<td>
				<label for="PhoneNumber"> Phone: </label>
			</td>
			<td>
				<input type="text" name="PhoneNumber" size="20" min="9" maxlength="9" required />
			</td>
		</tr>
		<tr>
			<td>
				<label for="Email"> Email: </label>
			</td>
			<td>
				<input type="text" name="Email" size="20" maxlength="50" required />
			</td>
		</tr>

        <tr>
			<td colspan = "2" align = "middle">
				<label>Donate to Golfer</label>
			</td>
		</tr>


        <tr>
			<td>
				<label for="Golfer"> Golfer: </label>
			</td>
			<td>
				<select name="GolferID">
				<?php 	$mysqli = new mysqli("itd2.cincinnatistate.edu", "ryibrahim", "0653690", "01PHP400IbrahimR");
								$query= $mysqli->query("SELECT GolferID,LastName FROM Golfers"); ?>
                         <?php while ($rows = $query->fetch_array(MYSQLI_ASSOC)) {

                                                $value= $rows['GolferID']; 
												$name= $rows['LastName'];
												if ($Golfer['GolferID'] == $value) {?>

                           <option value="<?php echo $value?>" selected ><?php echo $name?></option> <?php } else { ?>
						   <option value="<?php echo $value?>"><?php echo $name?></option> <?php }
						 } ?>
				</select>	</td>
		</tr>

        <tr>
			<td>
				<label for="PaymentAmount"> Donation: </label>
			</td>
			<td>
				<input type="currency" name="PaymentAmount" id="PaymentAmount" placeholder = "$0.00" size="20" maxlength="50" required />
			</td>
		</tr>

        <tr>
			<td>
				<label for="Payment"> Payment Type: </label>
			</td>
			<td>
				<select name="selPayment" id="selPayment">
					<option value='1'>Check</option><option value='2'>Cash</option><option value='3'>Credit Card</option>				</select>
			</td>
		</tr>

		<tr>
			<td colspan = "2" align = "middle">
			

				<input class="button1" style="margin-right:12px" type="submit" name = "btnSubmit" value="Submit" /><input class="button1" type="reset" name = "btnClear" value="Clear" />
			</td>
		</tr>

		</table>
		
		<table border=1>
			<tr>
				<td align="center" colspan=2><a href="UpdateGolfer.php">Show Golfers in Database</a></td>
			</tr>
		</table>
		
		</form>

<script>

var form = document.getElementById("submit-form");
var golferSelectBox = document.getElementById("GolferID");
// Get the id value of the currently selected golfer
var golferID = golferSelectBox.options[golferSelectBox.selectedIndex].value;

form.action = "process_sponsor.php?intGolferID=" + golferID.toString();

</script>
<?php

$LastName 		= $_POST["LastName"];
$FirstName 		= $_POST["FirstName"];
$Address 		= $_POST["Address"];
$City 			= $_POST["City"];
$State 			= $_POST["State"];
$ZipCode		= $_POST["ZipCode"];
$PhoneNumber	= $_POST["PhoneNumber"];
$Email 			= $_POST["Email"];
$StateID 		= $_POST["StateID"];
       
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
    $insertSponsor = "INSERT INTO Sponsors (FirstName, LastName, Address, City, StateID, ZipCode, PhoneNumber, Email) 
                            VALUES ('$FirstName', '$LastName', '$Address', '$City', $StateID, '$ZipCode', '$PhoneNumber', '$Email')";

							
if (mysqli_query($conn, $insertSponsor)) {
} else {
   echo "Error: " . $insertSponsor . "<br>" . $conn->error;
  }
}


?>
<?php

$GolferID		= $_POST["GolferID"];
$PaymentAmount 		= $_POST["PaymentAmount"];
$selPayment 		= $_POST["selPayment"];

        
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
    $insertGolfer = "INSERT INTO EventGolferSponsors (PledgePerHole,PaymentTypeID) 
                            VALUES ('$PaymentAmount', '$selPayment '); INSERT INTO EventGolfer (GolferID) VALUES ('$GolferID')";

							
if (mysqli_query($conn, $insertGolfer)) {
} else {
   echo "Error: " . $insertGolfer . "<br>" . $conn->error;
  }
}


?>
</body>
</html>