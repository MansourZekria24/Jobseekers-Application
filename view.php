<?php
/*
Author: Mansour Zekria

*/
 
require('db.php');

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jobseeker web-Application</title>
	
	<link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/bestjobs.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="view.php">View CV's</a>
          </li>		  
		   <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="create.php">Generate new CV</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php?logout='1'">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="header">
		<h2>ALL My CV's</h2>
	</div>
			<center>

			</center>

<div class="form">
<h2>View Records</h2>
<table width="70%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>Email</strong></th><th><strong>Address</strong></th><th><strong>City</strong></th><th><strong>Poscode</strong></th><th><strong>Country</strong></th><th><strong>Job Title</strong></th><th><strong>Education Level</strong></th><th><strong>Gcse's</strong></th><th><strong>Educational Qualification</strong></th><th><strong>Professional Qualification</strong></th><th><strong>Skills</strong></th><th><strong>Experience</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from cv ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["email"]; ?></td><td align="center"><?php echo $row["address"]; ?></td><td align="center"><?php echo $row["city"]; ?></td><td align="center"><?php echo $row["postal_code"]; ?></td><td align="center"><?php echo $row["country"]; ?></td><td align="center"><?php echo $row["jobtitle"]; ?></td><td align="center"><?php echo $row["educationlevel"]; ?></td><td align="center"><?php echo $row["gcse"]; ?></td><td align="center"><?php echo $row["educationalqualification"]; ?></td><td align="center"><?php echo $row["professionalqualification"]; ?></td><td align="center"><?php echo $row["skill"]; ?></td><td align="center"><?php echo $row["experience"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>


	
  </body>

</html>
