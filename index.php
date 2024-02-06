<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Debate Club</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="w3-light-blue w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/debate.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Debate Club</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-home fa-fw w3-margin-right"></i>HOME</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file fa-fw w3-margin-right"></i>ABOUT DEBATE CLUB</a>
    <a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-group fa-fw w3-margin-right"></i>COMMITTEE</a>  
    <a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a> 
    <a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw w3-margin-right"></i>ACTIVITY</a> 
    <a href="#collaboration" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-handshake fa-fw w3-margin-right"></i>COLLABORATION</a>
    <a href="#achievements" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-trophy fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-phone fa-fw w3-margin-right"></i>CONTACT</a>
    <a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ADMINISTRATOR</a> 
  </div>
  <div class="w3-panel w3-large">
    
     <p>We are located at:</p>
       <a href="https://maps.app.goo.gl/RytwpQdzva3Vss798"><img src="photo/location.jpg" style="width:12%;" class="w3-round"></a>UITM MACHANG
        <br>
        <br>
     <p>Find us here:</p>
 <a href="https://www.facebook.com/profile.php?id=100038445069521"><img src="photo/facebook.jpg" style="width:10%;" class="w3-round">
 <a href="https://www.instagram.com/hzr.ina/"><img src="photo/instagram.jpg" style="width:11%;" class="w3-round">
 <a href="https://www.wasap.my/60138815478"><img src="photo/whatsapp.jpg" style="width:18%;" class="w3-round">

  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="home">
    <a href="#"><img src="photo/debate.png" style="width:85px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <div class="w3-panel w3-yellow">
      <p align="center">
  <h1><b>Welcome to Debate Club</b></h1>
</div> 
   
    

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
    <p align="center">
     <img src="photo/debate.png" alt="Me" style="width:60%">
   </p>
    </div>
    
  <div id="about" class="w3-container w3-padding-large" style="margin-bottom:32px">
    <br>
    <h4><b>Debate Club</b></h4>
    <p>Here, we celebrate the diversity of voices and viewpoints. The University Debate Club provides a platform for students to unleash their passion for expression, encouraging them to voice their opinions, challenge conventional wisdom, and delve into the intricacies of various subjects. Whether you have a burning desire to advocate for social change, dissect current affairs, or explore academic curiosities, our club is the canvas for your thoughts to come to life.</p>
    <hr>
    

   <!-- Header -->
  <header id="committee">
    <br>
    <h4><b>Debate Club Committee</b></h4>
    <!-- Progress bars / Skills -->
<!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="photo/photo15.jpg" alt="Sandwich" style="width:100%">
      <h3>Sophia Athena</h3>
      <p>PRESIDENT</p>
    </div>
    <div class="w3-quarter">
      <img src="photo/photo2.jpg" alt="Steak" style="width:100%">
      <h3>Frederick</h3>
      <p>VICE PRESIDENT</p>
    </div>
    <div class="w3-quarter">
      <img src="photo/photo5.jpg" alt="Cherries" style="width:100%">
      <h3>Izekiel</h3>
      <p>SECRETARY</p>
    </div>
    <div class="w3-quarter">
      <img src="photo/photo4.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Serena</h3>
      <p>TREASURER</p>
    </div>
    <div class="w3-quarter">
      <img src="photo/photo6.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Serra</h3>
      <p>DEBATE TOURNAMENT DIRECTOR</p>
    </div>
 <div class="w3-quarter">
      <img src="photo/photo11.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Lana</h3>
      <p>PUBLIC RELATIONS LEADER</p>
    </div>
     <div class="w3-quarter">
      <img src="photo/photo8.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Vernon</h3>
      <p>RECRUITMENT AND MEMBERSHIP LEADER</p>
    </div>
     <div class="w3-quarter">
      <img src="photo/photo17.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Gabriel</h3>
      <p>EVENT COORDINATOR</p>
    </div>
  </div>
<div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="photo/photo16.jpg" alt="Sandwich" style="width:100%">
      <h3>Sabella</h3>
      <p>COMMITTEE MEMBERS</p>
    </div>
    <div class="w3-quarter">
      <img src="photo/photo1.jpg" alt="Steak" style="width:100%">
      <h3>Lilian</h3>
      <p>COMMITTEE MEMBERS</p>
    </div>
    <div class="w3-quarter">
      <img src="photo/photo18.jpg" alt="Cherries" style="width:100%">
      <h3>Naomi</h3>
      <p>COMMITTEE MEMBERS</p>
    </div>
    <div class="w3-quarter">
      <img src="photo/photo12.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Monica</h3>
      <p>COMMITTEE MEMBERS</p>
    </div>
  <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  </div>

   <!-- Header -->
  <header id="membership">
    <br>
  <p id="membership" align="center"><h4><b>Membership Form for Debate Club 2024</h4></b></p>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
        </tr>
      </thead>
      <tbody>
       <?php
        $sql = "SELECT * FROM members";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
    </p>
    <hr>
  
  <!-- Header -->
  <header id="activity">
     <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <br>
  <p id="activity" align="center"><h4><b>Activities Form for Debate Club</h4></b></p>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
<br>
<!-- Header -->
  <header id="collaboration">
    <br>
  <p id="collaboration" align="center"><h4><b>Collaboration Form for Debate Club</h4></b></p>
 <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Club ID</th>
          <th scope="col">Club Name</th>
          <th scope="col">Club Ownership</th>
          <th scope="col">Club Type</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM club";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["club_id"] ?></td>
            <td><?php echo $row["club_name"] ?></td>
            <td><?php echo $row["club_owner"] ?></td>
            <td><?php echo $row["club_type"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

<br>
<!-- Header -->
  <header id="achievements">
 <!-- First Photo Grid-->
  <p id="achievement" align="center"><h4><b>Achievements for Debate Club</h4></b></p>
  <div id="achievement" class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/medal.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>The Rising Star Medal</b></p>
                <p>Awarded to a promising newcomer who exhibits great potential and enthusiasm for debating.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/best.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Best Speaker Awards</b></p>
        <p>Recognition for outstanding individual performance in debates, either within the club or in external competitions.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/maverick.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>The Maverick Award</b></p>
        <p>Awarded to the individual who fearlessly explores unconventional perspectives and brings a fresh approach to debates.</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/cert1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>The Peer Mentor Awards</b></p>
        <p>Awarded to the member who has shown outstanding dedication to mentoring and supporting fellow debaters.</p>
        <br>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/cert2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Master Debater Awards</b></p>
        <p>Awarded to the individual who consistently demonstrates exceptional debate skills, strategic thinking, and adaptability.</p>
        <br>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/cert4.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>The Diplomat's Distinction Awards</b></p>
        <p>Given to the member who best demonstrates diplomatic skills during debates, fostering a constructive and respectful environment.</p>
      </div>
    </div>
  </div>

  
 <!-- Contact Section -->
  <header id="contact">
  <?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <br>
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
 <h4><b><p class="w3-text-black">Contact Us for Debate Club</b></h4>
<h5><p class="w3-text-grey">Fill this form for your comment about our club website</h5></p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Contact Student ID</th>
          <th scope="col">Contact Number</th>
   <th scope="col">Email</th>
          <th scope="col">Comment</th>
         
        </tr>
      </thead>
      <tbody>
  
        <?php
        $sql = "SELECT * FROM contact";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>

            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>

 

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
</script>
<br>
<br>
<br>
<footer class="w3-container w3-white w3-center w3-opacity w3-hover-opacity-off" id="contact">
  <div class="w3-text-black">
    <p><small>Copyright &#169 2024 Debate Club</small></p>
    <p><small>Recommended Browser Google Chrome Resolution 1920x1080</small></p>
    <p><small>Last Updated 04 February 2024</small></p>
    <p><small> All right Reserved</small></p>
    <p><small>For Study Purposes Only</small></p>
</footer>

</body>
</html>
