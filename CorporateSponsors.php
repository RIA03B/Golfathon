<!DOCTYPE html>
<html lang="en">
<title>All about Event</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Manage<br>Golfathon</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="http://itd1.cincinnatistate.edu/PHP-IbrahimR/Content/Finally-Final/FirstPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Manage Event</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Manage Event Cordinators</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Corporate Sponsors</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Corporate Sponsorship Management Type</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Sponsor the Event</a>
	    <a href="#contacts" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Golfer/Sponsors Management</a>
		<a href="http://itd1.cincinnatistate.edu/PHP-IbrahimR/Content/Finally-Final/FirstPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a> 
 </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-pale-green w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-pale-green w3-margin-right" onclick="w3_open()">☰</a>
  <span>GOLFATHON</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Manage Golfathon</b></h1>
    <h1 class="w3-xxxlarge w3-text-pale-green"><b>Manage Event</b></h1>
    <hr style="width:50px;border:5px solid pale-green" class="w3-round">
  </div>
  
  <!-- Event Managment (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      
	  
  </div>

 
  <!-- Manage Event Cordinators-->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-green"><b>Manage Event Cordinators</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
	<form action="/action_page.php" target="_blank">
      <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to add a Cordinator</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required><br><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br><br>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label><br>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button"  class="cancelbtn w3-pale-green">Cancel</button>
        <button type="button" class="signupbtn w3-pale-green" id="Submitts" onclick="Functions()">Sign Up</button>
      </div>
    </div>
	  </form>
	    </div>
		 <p id="View"></p>

		<script>
		function Functions() {
		  var x = document.getElementById("Submitts").value;
		  document.getElementById("View").innerHTML = "You are now add to be a Cordinator for the Event";
		}
		</script>
	  <script>
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
		modal.style.display = "none";
	  }
	}
</script>

  
  <!-- Corporate Sponsorship Management -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-green"><b>Corporate Sponsors</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <?php                    
					$server_name = "itd2.cincinnatistate.edu";
					$username = "ryibrahim";
					$password = "0653690";
					$dbname = "01PHP400IbrahimR";

                    $conn = new mysqli($server_name, $username, $password, $dbname);

                  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
 
            
          
$sql = "SELECT FirstName,LastName FROM CorporateSponsors";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>
        <tr>
        
        <th>First Name </th>
		<th> Last Name</th>
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
   
  </div>


  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-green"><b>Corporate Sponsorship Management Type</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <p>Help us reach our goal !!</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Hole-In-One Sponsor</li>
        <li class="w3-padding-16">Unlimited Availability </li>
        <li class="w3-padding-16">Put your business front and centre</li>
        <li class="w3-padding-16">
          <h2>$ 150</h2>
          <span class="w3-opacity">per Hole</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-pale-green w3-xlarge w3-padding-32">Golf Drink/Beverage Cart Sponsor</li>
        <li class="w3-padding-16">Unlimited Availability </li>
        <li class="w3-padding-16">Increase your reach and exposure to new clients,<br>
		customers and businesses</li>
        <li class="w3-padding-16">
          <h2>$ 100</h2>
          <span class="w3-opacity">per Golfer</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-pale-green w3-padding-large w3-hover-black">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Corporate Sponsor -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-green"><b>Sponsor the Event</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <p>Select an Event:</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <select id="mySelect" onchange="myFunction()">
		  <option value="2016">2016</option>
		  <option value="2017">2017</option>
		  <option value="2018">2018</option>
		  <option value="2019">2019</option>
		</select>

      <p id="demo"></p>

		<script>
		function myFunction() {
		  var x = document.getElementById("mySelect").value;
		  document.getElementById("demo").innerHTML = "You are now add to the " + x +" Event";
		}
		</script>
	</form>  
  </div>


<!-- Golfer/Sponsors Management -->
  <div class="w3-container" id="contacts" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-green"><b>Golfer/Sponsors Management</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <p>Click on Donate to sponsor a Golfer !!!</p>
    <form action="/action_page.php" target="_blank">
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
 
            
           
$sql = "SELECT FirstName,LastName  FROM Golfers ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>
        <tr> 
        <th>First Name</th>
        <th>Last Name</th>
        <th>Donate</th>
        </tr>";

   while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
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
 
 </table> 
    </form>  
  </div>
<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">By <a href="#" title="W3.CSS" target="_blank" class="w3-hover-opacity">Rania Ibrahim</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
