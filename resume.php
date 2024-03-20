<?php

define("DOMPDF_ENABLE_REMOTE", true);
// get all the data
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'] == null ? "" : $_POST['middlename'];
$lastname = $_POST['lastname'];
$designation = $_POST['designation'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$summary = $_POST['summary'];

// get profile pic
if(isset($_FILES['userimage']) && $_FILES['userimage']['error'] == 0) {
        $target_dir = "./"; // Directory where you want to store the image
        $target_file = $target_dir . "user.jpg"; // Name of the uploaded image
        $path = $_FILES['userimage']['tmp_name'];
        
        // Move the uploaded file to the specified directory
        if(move_uploaded_file($path, $target_file)) {
            echo "Image uploaded successfully.";
        } else {
            echo "Failed to upload image.";
        }
    } else {
        $path = 'temp.jpg';
    }
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

//get skills
$skills = $_POST['skills']; 

// get achievements
$achievements = $_POST['title'];
$achievements_description = $_POST['description'];

// get education
$education_school = $_POST['school-name'];
$education_course = $_POST['degree'];
$education_place = $_POST['school-city'];
$education_date_from = $_POST['school-start-date'];
$education_date_to = $_POST['school-end-date'];
$education_description = $_POST['school-description'];

// get experinces
$title_company = $_POST['title-company'];
$company_name = $_POST['company-name'];
$company_location = $_POST['company-location'];
$company_start_date = $_POST['company-start-date'];
$company_end_date = $_POST['company-end-date'];
$company_description = $_POST['company-description'];

// get proejcts
$project_name = $_POST['project-name'];
$project_link = $_POST['project-link'];
$project_description = $_POST['project-description'];

require_once('./dompdf/autoload.inc.php');      

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');



// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

$html = "
<html>
<head>
        <style>
                body{
                        font-family: Arial;
                }
                .left{
                        background-color: rgb(7,72,70);
                        height:10.68in;
                        width: 2.5in;
                        color:white;
                }
                .right{
                        width:4in;
                }
                .image-container{
                        
                }
                .name{
                      width:100%;
                      height:0.5in;
                      font-style:bold;
                      font-size: 0.208in;
                      text-align:center;
                }
                .horizontal-line{
                        height:0.0208in;
                        width:60%;
                        margin-left:auto;
                        margin-right:auto;
                        color:white;
                }
                .designation{
                        text-align:center;
                }
                .phone, .email, .address, .about{
                        margin:0.1in;
                }
                .left-heading{
                        margin-left:0.2in;
                        font-style:bold;
                        margin-top:0.2in;
                        margin-bottom:0.2in;
                }
                .left-sub-section{
                        margin-left:0.2in;
                        margin-right:0.2in;
                }
                .right-heading{
                        margin-left:0.3in;
                        margin-bottom:0.2in;
                        margin-top:0.5in;
                }
        </style>
</head>
<body>
        <table class='container' >
        <tr>
                <td class='left'>
                        <div class='image-container' style='margin-top:0.2in;margin-bottom:0.2in;margin-left:0.6in;'>
                        <img src='$base64' width='150' height='150'/>
                        </div>
                        <div class='name'>
                                $firstname $middlename $lastname
                        </div>
                        <div class='horizontal-line'>
                        </div>
                        <div class='designation'>
                                $designation
                        </div>

                        <div class='left-heading'> 
                                About 
                        </div>
                        <div class='left-sub-section'>
                                <div class='phone'>$phone</div>
                                <div class='email'>$email</div>
                                <div class='address'>$address</div>
                                <div class='about'>$summary</div>
                        </div>  

                        <div class='left-heading'> Skills </div>
                        <div class='left-sub-section'> ";

foreach ($skills as $skill){
        $html .= "<div style='margin:0.1in;'> $skill</div>";
}
                                

$html .= "</div>
                </td>
                <td class='right'>
                        <div class='achivements-section'>
                                <div class='right-heading'>
                                        ACHIEVEMENTS
                                </div>
                                <div class='right-sub-section'>";

foreach ($achievements as $index => $achievement){
        $html .= "<div style='margin-left:0.3in; margin-bottom:0.1in;background-color:rgb(240, 240, 240)'> $achievement</div>";
        $html .= "<div style='margin-left:0.3in; margin-bottom:0.1in;'> $achievements_description[$index]</div>";
}

$html .= "                      </div>
                        </div>
                        
                        <div class='education-section'>
                                <div class='right-heading'>
                                        EDUCATION
                                </div>
                                <div class='right-sub-section'>";

foreach ($education_school as $index => $school){
        $html .= "<div style='margin-left:0.3in; margin-bottom:0.1in;background-color:rgb(240, 240, 240)'>$school</div>";
        $html .= "<div style='margin-left:0.3in;margin-bottom:0.1in;'>$education_course[$index]     $education_place[$index]</div>";
        $html .=        "<div style='margin-left:0.3in; margin-bottom:0.1in;'><span style='background-color:rgb(7,72,70);color:white;padding:0.05in;'>$education_date_from[$index]</span>     <span style='background-color:rgb(7,72,70);color:white;padding:0.05in;'>$education_date_to[$index]</span></div>";
        $html .= "<div style='margin-left:0.3in; margin-bottom:0.1in;'>$education_description[$index]</div>";
}

$html .= "                      </div>
                        </div>

                        <div class='experiences-section'>
                                <div class='right-heading'>
                                        EXPERIENCES
                                </div>
                                <div class='right-sub-section'>";

foreach ($title_company as $index => $title){
        $html .= "<div style='margin-left:0.3in;margin-bottom:0.1in;background-color:rgb(240, 240, 240)'>$title</div>";
        $html .= "<div style='margin-left:0.3in;margin-bottom:0.1in;'><span style='margin-bottom:0.1in;'>$company_name[$index]</span> <span style='margin-bottom:0.1in;font-style:italic;'>$company_location[$index]</span>  
        <div style='margin-bottom:0.1in;margin-top:0.1in'><span style='background-color:rgb(7,72,70);color:white;padding:0.05in;margin:0.1in;'>$company_start_date[$index]</span><span style='background-color:rgb(7,72,70);color:white;padding:0.05in;'>$company_end_date[$index]</span></div>
        <div>$company_description[$index]</div>
        </div>";
}

$html .= "                      </div>
                        </div>

                        <div class='projects-section'>
                                <div class='right-heading'>
                                        PROJECTS
                                </div>
                                <div class='right-sub-section'>";

foreach ($project_name as $index => $project){
        $html .= "<div style='margin-left:0.3in;margin-bottom:0.1in;background-color:rgb(240, 240, 240)'>$project</div>
        <div style='margin-left:0.3in;margin-bottom:0.1in;'>$project_link[$index]</div>
        <div style='margin-left:0.3in;margin-bottom:0.1in;'>$project_description[$index]</div>";
}

$html .= "                      </div>
                        </div>
                </td>
        </tr>
        </div>
</body>
</html>";

$dompdf->loadHtml($html);

// Render the HTML as PDF
$dompdf->render();

header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="output.pdf"'); // Set filename as "output.pdf" and specify inline disposition

// Output the generated PDF to Browser
$dompdf->stream(null, ['Attachment' => 0]);