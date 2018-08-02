

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
            <a class="nav-link js-scroll-trigger" href="home.php">Home</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="database-search-form.php">Search Jobseekers</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="create_user.php">Add Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home.php?logout='1'">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

	
	
    <center>
	
	
	<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "multi_login";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=$_POST['search'];
$query = $pdo->prepare("select * from cv where city LIKE '%$search%' OR jobtitle LIKE '%$search%' OR educationlevel LIKE '%$search%' OR gcse LIKE '%$search%' OR educationalqualification LIKE '%$search%' OR professionalqualification LIKE '%$search%' OR skill LIKE '%$search%' OR experience LIKE '%$search%'  LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();

// Display search result
         if (!$query->rowCount() == 0) {
		 		echo "Search found :<br/>";
				echo "<table style=\"font-family:arial;color:#333333;\">";	
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">ID</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">Name</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">Email</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">Address</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">City</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">Postcode</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">Country</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">Job Title</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">Education Level</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">Gcse's</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">Educational Qualification</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">Professional Qualification</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">Skills</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;background:#BD5D38;\">Experience</td></tr>";				
            while ($results = $query->fetch()) {
				echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";			
                echo $results['id'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";
                echo $results['name'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";
                echo $results['email'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";
                echo $results['address'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";
                echo $results['city'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";
                echo $results['postal_code'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";
                echo $results['country'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";
                echo $results['jobtitle'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";
                echo $results['educationlevel'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";
                echo $results['gcse'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";
                echo $results['educationalqualification'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";
                echo $results['professionalqualification'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";
                echo $results['skill'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#BD5D38;\">";
                echo $results['experience'];
				echo "</td></tr>";				
            }
				echo "</table>";		
        } else {
            echo 'Nothing found';
        }
?>
	
	
</center>	
	

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>