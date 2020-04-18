<!DOCTYPE html>
<html>
<title>Golfathon</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">Navigation</h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  <a href="http://itd1.cincinnatistate.edu/PHP-IbrahimR/Content/Week8-9-10-11/Assignment%2011%20PHP_RI.html" class="w3-bar-item w3-button">Register to Golf</a>
  <a href="http://itd1.cincinnatistate.edu/PHP-IbrahimR/Content/Week8-9-10-11/UpdateGolfer.php" class="w3-bar-item w3-button">The Golfers</a>
  <a href="http://itd1.cincinnatistate.edu/PHP-IbrahimR/Content/Finally-Final/donate.php" class="w3-bar-item w3-button">Make a Donation</a>
  <a href="http://itd1.cincinnatistate.edu/PHP-IbrahimR/Content/Finally-Final/GolferStat.php" class="w3-bar-item w3-button">Golfer Statistics</a>
  <a href="http://itd1.cincinnatistate.edu/PHP-IbrahimR/Content/Finally-Final/TeamStat.php" class="w3-bar-item w3-button">Team Statistics</a>
</nav>
<style>
 header::before{
	
  background-image: url("image2.jpg");
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
<!-- Header -->

<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
  <div class="w3-center">
  <h4>THE MOST IMPORTANT SHOT IN GOLF IS THE NEXT ONE</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">Golfathon</h1>
    <div class="w3-padding-32">
      <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" onclick="document.getElementById('id01').style.display='block'"style="font-weight:900;">Login</button>
	  </div>
</header>


<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h4 align="center">Enter Information</h4>
        </header>
      <div class="w3-center"><br>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required><br><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>
        
      <button type="submit" value="Load new document" onclick="newDoc()" >Login</button>
      <label><br>
        <input type="checkbox"  checked="checked" name="remember"> Remember me
      </label>
	  
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    </div>
     </div>
</div>
<script>
function newDoc() {
  window.location.assign("http://itd1.cincinnatistate.edu/PHP-IbrahimR/Content/Finally-Final/CorporateSponsors.php")
}
</script>

<div class="w3-center w3-padding w3-white w3-display-container">
  <h2>About Us</h2>
</div>   

<div class="w3-padding w3-white w3-display-container">
    <p>The Golfathon is an Athletic Booster Event that helps raise funds to assist our
	Athletic Department and other school programs/events that happen throughout the year.
	Athletic Teams and Clubs are seeking donations for their golfer with a goal of 
	raising a minimum of $1500 per team. Donations can be made online at<a href="http://itd1.cincinnatistate.edu/PHP-IbrahimR/Content/Finally-Final/donate.php" class="w3-bar-item w3-button"><strong>Make a Donation</strong></a>and each team’s golfer will participate in a “Day of Golf”. </p>
  </div>

<div class="w3-container w3-center">
  
<div class="w3-container">
  <hr>
  <div class="w3-center">
    <h2>Golfers Participating </h2>
  </div>
<div class="w3-responsive w3-card-4">
<table class="w3-table w3-striped w3-bordered">
<thead>
<tr class="w3-theme">
     <?php                    
					$server_name = " ";
					$username = " ";
					$password = " ";
					$dbname = " ";

                    $conn = new mysqli($server_name, $username, $password, $dbname);

                  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
 
            
          
$sql = "SELECT FirstName,LastName FROM Golfers";


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
</tr>
</thead>
<tbody>
<tr>
  <td>
 
</tr>
</tbody>
</table>
</div>
<hr>
 <div class="w3-container w3-card w3-white" >
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Event Information</h2>
        <div class="w3-container" style="text-align:center;">
          <h5 class="w3-opacity">
          <h6 >
          <?php 
		             
					$server_name = " ";
					$username = " ";
					$password = " ";
					$dbname = " ";

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

						 
?>

			</h5>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Golfer with the most</b></h5>
          <h6 >
          <?php 
		             
					$server_name = " ";
					$username = " ";
					$password = " ";
					$dbname = " ";

                    $conn = new mysqli($server_name, $username, $password, $dbname);

                 $sql = "SELECT Golfers.FirstName, Golfers.LastName, MAX( EventGolferSponsors.PledgePerHole ) AS High FROM EventGolferSponsors JOIN EventGolfer ON EventGolfer.EventGolferID = EventGolferSponsors.EventGolferID JOIN Golfers ON Golfers.GolferID = EventGolfer.GolferID";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					  echo "<table >
							<tr>
							
							<th>First Name</th>
							<th>Last Name</th>
							<th>Donations Gathered</th>						   
							</tr>";

					   while ($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>" . $row['FirstName'] . "</td>";
							echo "<td>" . $row['LastName'] . "</td>";
							echo "<td>" . $row['High'] . "</td>";
							echo "</tr>";
						   }
						echo "</table>";
					} else {
						echo "0 results";
					}

					// Free result set
					mysqli_close($conn);

						 
?>

			</h5> <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Team with the most</b></h5>
          <h6 >
          <?php 
		             
					$server_name = " ";
					$username = " ";
					$password = " ";
					$dbname = " ";

                    $conn = new mysqli($server_name, $username, $password, $dbname);

                 $sql = "SELECT TypeofTeams.TypeofTeam , MAX( EventGolferSponsors.PledgePerHole ) AS High FROM EventGolferSponsors JOIN EventGolfer ON EventGolfer.EventGolferID = EventGolferSponsors.EventGolferID JOIN EventGolferTeamandClubs ON EventGolferTeamandClubs.EventGolferID = EventGolfer.EventGolferID JOIN TeamsandClubs ON TeamsandClubs.TeamsandClubID = EventGolferTeamandClubs.TeamsandClubID JOIN TypeofTeams ON TypeofTeams.TypeofTeamID = TeamsandClubs.TypeofTeamID";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					  echo "<table >
							<tr>
							
							<th>Team</th>
							<th>Donations Gathered</th>						   
							</tr>";

					   while ($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>" . $row['TypeofTeam'] . "</td>";
							echo "<td>" . $row['High'] . "</td>";
							echo "</tr>";
						   }
						echo "</table>";
					} else {
						echo "0 results";
					}

					// Free result set
					mysqli_close($conn);

						 
?>
<br>
        </div>
      </div>

    <!-- End Right Column -->
    </div><br><br><br>

<br><br>
<!--  information -->
<div class="w3-container  w3-padding-16 w3-pale-green w3-center" id="Event">
  <div class="w3-content">
    <h1 class="w3-text-grey"><b>Golfathon Upcoming Event</b></h1>
    <img class="w3-round-large w3-grayscale-min" src="best-places-golf-cambodia.jpg" style="width:100%;margin:64px 0">
    <div class="w3-row">
      <div class="w3-half">
        <h2>When</h2>
        <p>December 14, 2019 - 1:00pm</p>

      </div>
      <div class="w3-half">
        <h2>Where</h2>
        <p>Cincinnati State Technical and Community College, 3520 Central Pkwy, Cincinnati, OH 45223</p>
       
      </div>
    </div>
  </div>
</div>
<br><br> 

<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>Trying is winning in the moment</h3>
   <ul class="et-social-icons">
<div class="et-social-icon et-social-facebook">
<a href="#" class="icon">
<span>Facebook</span>
</a>
</div>
<div class="et-social-icon et-social-twitter">
<a href="#" class="icon">
<span>Twitter</span>
</a>
</div>
<div class="et-social-icon et-social-google-plus">
<a href="#" class="icon">
<span>Google</span>
</a>
</div>
<div class="et-social-icon et-social-rss">
<a href="#" class="icon">
<span>RSS</span>
</a>
</div>
</ul>
<p id="footer-info">
<strong>Copyright&copy;</strong> 2019 | 3520 Central Pkwy | Cincinnati , OH 45223 | 
P: N/A | F: N/A 
  
</footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>

</body>
</html>
