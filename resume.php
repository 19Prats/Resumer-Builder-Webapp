<?php

// get all the data
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'] == null ? "" : $_POST['middlename'];
$lastname = $_POST['lastname'];
$designation = $_POST['designation'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$summary = $_POST['summary'];

//get skills
$skills = $_POST['skills']; 

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
                        font-family: 'Arial', sans-serif;
                }
                .left{
                        background-color: rgb(7,72,70);
                        height:100%;
                        width: 30%;
                        color:white;
                }
                .right{
                        background-color:blue;
                        width:70%;
                }
                .image-container{
                        height:2.5in;
                        background-color:red;
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
                        <div class='image-container'>

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
                        <div class='ahivements-section'>
                                <div class='right-heading'>
                                        ACHIEVEMENT
                                </div>
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