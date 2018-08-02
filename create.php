<?php


if (isset($_POST['submit'])) {
	require "config.php";
	require "common.php";

	try {
		$connection = new PDO($dsn, $username, $password, $options);
		
		$new_user = array(
			"name" => $_POST['name'],
			"email"  => $_POST['email'],
			"address"     => $_POST['address'],
			"city"       => $_POST['city'],
			"postal_code"  => $_POST['postal_code'],
			"country"       => $_POST['country'],
			"jobtitle"       => $_POST['jobtitle'],
			"educationlevel"       => $_POST['educationlevel'],
			"gcse"       => $_POST['gcse'],
			"educationalqualification"       => $_POST['educationalqualification'],
			"professionalqualification"       => $_POST['professionalqualification'],
			"skill"       => $_POST['skill'],
			"experience"       => $_POST['experience']	
		);

		$sql = sprintf(
				"INSERT INTO %s (%s) values (%s)",
				"cv",
				implode(", ", array_keys($new_user)),
				":" . implode(", :", array_keys($new_user))
		);
		
		$statement = $connection->prepare($sql);
		$statement->execute($new_user);
	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}
	
}
?>

<?php if (isset($_POST['submit']) && $statement) { ?>
	<blockquote><?php echo $_POST['name']; ?> successfully added.</blockquote>
<?php } ?>

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
    <h1>Generate your CV</h1> 
    <form method="post" action=""> 
		
<fieldset> 
    <legend>Personal Information</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Full Name</label> 
            <input type="text" name="name" value="" /required> 
        </p> 
        <p> 
            <label for="email">Email Address</label> 
            <input type="text" name="email" value="" /required> 
        </p> 
    </div> 
    <div class="col"> 
        <p> 
            <label for="address">Address</label> 
            <input type="text" name="address" value="" /required> 
        </p> 
        <p> 
            <label for="city">City</label> 
            <input type="text" name="city" value="" /required> 
        </p> 
        
        <p> 
            <label for="postal_code">Post Code</label> 
            <input type="text" name="postal_code" value="" /required> 
        </p> 
        <p> 
            <label for="country">Country</label><input type="text" name="country" value="" /required> 
        </p> 
    </div> 
</fieldset>

<fieldset> 
    <legend>Job</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Job Title</label> 
            <input type="text" name="jobtitle" value="" /required> 
        </p> 
    </div> 
</fieldset>

  
	  <fieldset> 
    <legend>Minimum Education Level</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Education Level</label> 
            <input type="text" name="educationlevel" value="" /required> 
        </p> 
    </div> 
</fieldset>

<fieldset> 
    <legend>Minimum Number Of GCSE Passes</legend> 
    <div class="col"> 
        <p> 
            <label for="name">GCSE</label> 
            <input type="text" name="gcse" value="" /required> 
        </p> 
    </div> 
</fieldset>

<fieldset> 
    <legend>Educational Qualification</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Educational Qualification</label> 
            <input type="text" name="educationalqualification" value="" /required> 
        </p> 
    </div> 

</fieldset>

<fieldset> 
    <legend>Professional Qualification</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Professional Qualification</label> 
            <input type="text" name="professionalqualification" value="" /required> 
        </p> 
    </div> 
</fieldset>

<fieldset> 
    <legend>Skill</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Skill</label> 
            <input type="text" name="skill" value="" /required> 
        </p> 
    </div> 
</fieldset>

<fieldset> 
    <legend>Experience</legend> 
    <div class="col"> 
        <p> 
            <label for="name">Experience</label> 
            <input type="text" name="experience" value="" /required> 
        </p> 
    </div> 
</fieldset>
	<button type="submit" name="submit">Generate CV PDF</button>
	<input type="submit" name="submit" value="Submit">
    </form> 
</div></div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script> 
<script type="text/javascript"> 
$('button').click(function () { 
    $.post('create_CV.php', $('form').serialize(), function () { 
        $('div#wrap div').fadeOut( function () { 
            $(this).empty().html("<h2>Thank you!</h2><p>Thank you for Creating your CV with us. Please <a href='CV.pdf'>download your CV</a>. </p>").fadeIn(); 
        }); 
    }); 
    return false; 
}); 
</script>	
	


<link rel="stylesheet" href="CVstyle.css" /> 
  </body>

</html>
