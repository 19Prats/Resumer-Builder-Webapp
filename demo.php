<?php

require_once('./dompdf/autoload.inc.php');      

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

$html ="
<html>
<head>
        <style>
                
        </style>
</head>
<body>
        <table class='container'>
                <tr>
                        <td style='width:30%;height:100%;background-color:blue'>
                                HEY THERE
                        </td>
                        <td style='width:70%;background-color:red'>
                                HEY THERE       
                        </td>
                </tr>
        </table>
</body>
<html>";

$dompdf->loadHtml($html);

$dompdf->render();

// Set appropriate headers
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="output.pdf"'); // Set filename as "output.pdf" and specify inline disposition

// Output the generated PDF to Browser
$dompdf->stream(null, ['Attachment' => 0]);