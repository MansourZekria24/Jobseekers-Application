<?php
/*
Author: Mansour Zekria

*/
 
require('db.php');

$id=$_REQUEST['id'];
$query = "SELECT * from cv where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jobseeker web-Application</title>

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
            <a class="nav-link js-scroll-trigger" href="view.php">View CV</a>
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

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>


	
<div id="wrap"><div>	
<center><h1>Update CV</h1></center>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$address =$_REQUEST['address'];
$city =$_REQUEST['city'];
$postal_code =$_REQUEST['postal_code'];
$country =$_REQUEST['country'];
$jobtitle =$_REQUEST['jobtitle'];
$educationlevel =$_REQUEST['educationlevel'];
$gcse =$_REQUEST['gcse'];
$educationalqualification =$_REQUEST['educationalqualification'];
$professionalqualification =$_REQUEST['professionalqualification'];
$skill =$_REQUEST['skill'];
$experience =$_REQUEST['experience'];

$update="update cv set name='".$name."', email='".$email."', address='".$address."', city='".$city."', postal_code='".$postal_code."', country='".$country."', jobtitle='".$jobtitle."', educationlevel='".$educationlevel."', gcse='".$gcse."', educationalqualification='".$educationalqualification."', professionalqualification='".$professionalqualification."', skill='".$skill."', experience='".$experience."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "CV Updated Successfully. </br></br><a href='view.php'>View Updated CV</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>

<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

		
<fieldset> 
    <legend>Personal Information</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Full Name</label> 
            <input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /> 
        </p> 
        <p> 
            <label for="email">Email Address</label> 
            <input type="text" name="email" placeholder="Enter Email" required value="<?php echo $row["email"]; ?>" /> 
        </p> 
    </div> 
    <div class="col"> 
        <p> 
            <label for="address">Address</label> 
            <input type="text" name="address" placeholder="Enter Address" required value="<?php echo $row["address"]; ?>" /> 
        </p> 
        <p> 
            <label for="city">City</label> 
            <input type="text" name="city" placeholder="Enter City" required value="<?php echo $row["city"]; ?>" /> 
        </p> 
        
        <p> 
            <label for="postal_code">Post Code</label> 
            <input type="text" name="postal_code" placeholder="Enter Postcode" required value="<?php echo $row["postal_code"]; ?>" />
        </p> 
        <p> 
            <label for="country">Country</label>
			<input type="text" name="country" placeholder="Enter Country" required value="<?php echo $row["country"]; ?>" />
        </p> 
    </div> 
</fieldset>

<fieldset> 
    <legend>Job</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Job Title</label> 
            <input type="text" name="jobtitle" placeholder="Enter Jobtitle" required value="<?php echo $row["jobtitle"]; ?>" />
        </p> 
    </div> 
</fieldset>

  
	  <fieldset> 
    <legend>Minimum Education Level</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Education Level</label> 
            <input type="text" name="educationlevel" placeholder="Enter Education Level" required value="<?php echo $row["educationlevel"]; ?>" />
        </p> 
    </div> 
</fieldset>

<fieldset> 
    <legend>Minimum Number Of GCSE Passes</legend> 
    <div class="col"> 
        <p> 
            <label for="name">GCSE</label> 
            <input type="text" name="gcse" placeholder="Enter Gcse's" required value="<?php echo $row["gcse"]; ?>" />
        </p> 
    </div> 
</fieldset>

<fieldset> 
    <legend>Educational Qualification</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Educational Qualification</label> 
            <input type="text" name="educationalqualification" placeholder="Enter Educational Qualification" required value="<?php echo $row["educationalqualification"]; ?>" />
        </p> 
    </div> 

</fieldset>

<fieldset> 
    <legend>Professional Qualification</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Professional Qualification</label> 
            <input type="text" name="professionalqualification" placeholder="Enter Professional Qualification" required value="<?php echo $row["professionalqualification"]; ?>" /> 
        </p> 
    </div> 
</fieldset>

<fieldset> 
    <legend>Skill</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Skill</label> 
            <input type="text" name="skill" placeholder="Enter Skill" required value="<?php echo $row["skill"]; ?>" />
        </p> 
    </div> 
</fieldset>

<fieldset> 
    <legend>Experience</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Experience</label> 
            <input type="text" name="experience" placeholder="Enter Experience" required value="<?php echo $row["experience"]; ?>" />
        </p> 
    </div> 
</fieldset>

<p><input name="submit" type="submit" value="Update" /></p>


</form>
<?php } ?>


<link rel="stylesheet" href="CVstyle.css" /> 

  </body>

</html>