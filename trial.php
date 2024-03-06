<?php

require_once('./dompdf/autoload.inc.php');      

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

$html ='
    <html>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="trial.css" rel="stylesheet">

        </head>
        <body>
        <p  class="h1">h1. Bootstrap heading</p>
        <p class="h2">h2. Bootstrap heading</p>
        <p class="h3">h3. Bootstrap heading</p>
        <p class="h4">h4. Bootstrap heading</p>
        <p class="h5">h5. Bootstrap heading</p>
        <p class="h6">h6. Bootstrap heading</p>
        </body>
    </html>
';

$dompdf->loadHtml($html);

$dompdf->render();

// Set appropriate headers
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="output.pdf"'); // Set filename as "output.pdf" and specify inline disposition

// Output the generated PDF to Browser
$dompdf->stream(null, ['Attachment' => 0]);