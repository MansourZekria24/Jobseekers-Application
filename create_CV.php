

<?php
require('fpdf/fpdf.php');

class PDF_CV extends FPDF { 
    function __construct ($orientation = 'P', $unit = 'pt', $format = 'Letter', $margin = 40) { 
        $this->FPDF($orientation, $unit, $format); 
        $this->SetTopMargin($margin); 
        $this->SetLeftMargin($margin); 
        $this->SetRightMargin($margin); 
        $this->SetAutoPageBreak(true, $margin); 
    } 
	
	function Header() { 
    $this->SetFont('Arial', 'B', 20); 
    $this->SetFillColor(36, 96, 84); 
    $this->SetTextColor(225); 
    $this->Cell(0, 30, "Best Jobs", 0, 1, 'C', true); 
}
function Footer() { 
    $this->SetFont('Arial', '', 12); 
    $this->SetTextColor(0); 
    $this->SetXY(0,-60); 
    $this->Cell(0, 20, "Thank you for generating your CV with BestJobs!", 'T', 0, 'C'); 
 }
	
	function PriceTable($product) { 
    $this->SetFont('Arial', 'B', 12); 
    $this->SetTextColor(0); 
    $this->SetFillColor(36, 140, 129); 
    $this->SetLineWidth(1); 
    $this->Cell(427, 25, "Item Description", 'LTR', 0, 'C', true); 
 

 
	$this->Cell(427, 20, $product, 1, 0, 'L'); 
	


}
	
	
	function JobtitleTable($jobtitles) { 
    $this->SetFont('Arial', 'B', 12); 
    $this->SetTextColor(0); 
    $this->SetFillColor(36, 140, 129); 
    $this->SetLineWidth(1); 
    $this->Cell(427, 25, "Jobtitle", 'LTR', 0, 'C', true); 
	$this->Ln(30);
	$this->Cell(200, 15, $_POST['jobtitle'], 0, 2); 
}


	function EducationlevelTable($educationlevels) { 
    $this->SetFont('Arial', 'B', 12); 
    $this->SetTextColor(0); 
    $this->SetFillColor(36, 140, 129); 
    $this->SetLineWidth(1); 
    $this->Cell(427, 25, "Education Level", 'LTR', 0, 'C', true); 
    $this->Ln(30);
	$this->Cell(200, 15, $_POST['educationlevel'], 0, 2); 
}



function GcseTable($gcses) { 
    $this->SetFont('Arial', 'B', 12); 
    $this->SetTextColor(0); 
    $this->SetFillColor(36, 140, 129); 
    $this->SetLineWidth(1); 
    $this->Cell(427, 25, "List of Gcse's", 'LTR', 0, 'C', true); 
    $this->Ln(30);
	$this->Cell(200, 15, $_POST['gcse'], 0, 2); 
}


function EducationalqualificationTable($educationalqualifications) { 
    $this->SetFont('Arial', 'B', 12); 
    $this->SetTextColor(0); 
    $this->SetFillColor(36, 140, 129); 
    $this->SetLineWidth(1); 
    $this->Cell(427, 25, "Educational Qualifications", 'LTR', 0, 'C', true); 
    $this->Ln(30);
	$this->Cell(200, 15, $_POST['educationalqualification'], 0, 2);  
}

function ProfessionalqualificationTable($professionalqualifications) { 
    $this->SetFont('Arial', 'B', 12); 
    $this->SetTextColor(0); 
    $this->SetFillColor(36, 140, 129); 
    $this->SetLineWidth(1); 
    $this->Cell(427, 25, "Professional Qualification", 'LTR', 0, 'C', true); 
	 $this->Ln(30);
	$this->Cell(200, 15, $_POST['professionalqualification'], 0, 2);
}

function SkillTable($skills) { 
    $this->SetFont('Arial', 'B', 12); 
    $this->SetTextColor(0); 
    $this->SetFillColor(36, 140, 129); 
    $this->SetLineWidth(1); 
    $this->Cell(427, 25, "List of Skills", 'LTR', 0, 'C', true); 
	 $this->Ln(30);
	$this->Cell(200, 15, $_POST['skill'], 0, 2);
}

function ExperienceTable($experiences) { 
    $this->SetFont('Arial', 'B', 12); 
    $this->SetTextColor(0); 
    $this->SetFillColor(36, 140, 129); 
    $this->SetLineWidth(1); 
    $this->Cell(427, 25, "Experience", 'LTR', 0, 'C', true); 
	 $this->Ln(30);
	$this->Cell(200, 15, $_POST['experience'], 0, 2); 
}
	
}

$pdf = new PDF_CV();
$pdf->AddPage(); 
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetY(100);



$pdf->Cell(100, 13, $_POST['name']);



$pdf->SetX(140); 
$pdf->SetFont('Arial', 'I'); 
$pdf->Cell(200, 15, $_POST['address'], 0, 2); 
$pdf->Cell(200, 15, $_POST['city'], 0, 2); 
$pdf->Cell(200, 15, $_POST['postal_code'] . ' ' . $_POST['country']); 
$pdf->Ln(30);

$pdf->Ln(30);



$pdf->Ln(5);
$pdf->JobtitleTable($_POST['jobtitle']);
$pdf->Ln(5);
$pdf->EducationlevelTable($_POST['educationlevel']);
$pdf->Ln(5);
$pdf->GcseTable($_POST['gcse']);
$pdf->Ln(5);
$pdf->EducationalqualificationTable($_POST['educationalqualification']);
$pdf->Ln(5);
$pdf->ProfessionalqualificationTable($_POST['professionalqualification']);
$pdf->Ln(5);
$pdf->SkillTable($_POST['skill']);
$pdf->Ln(5);
$pdf->ExperienceTable($_POST['experience']);

$pdf->Ln(50);
$message = "Thank you for generating your CV with BestJobs online. Our policy is to get you best possible job that suit your requrements. If you did not get any job offers within a week, let us know and we'll reimburse you 5%.\n\nIf you have any questions, you can email us at the following email address:"; 
$pdf->MultiCell(0, 15, $message);


$pdf->SetFont('Arial', 'U', 12); 
$pdf->SetTextColor(1, 162, 232); 

$pdf->Ln(20); 
$pdf->Write(13, "CV.bestjobs.com", "mailto:example@example.com");

$pdf->Output('CV.pdf', 'F');

