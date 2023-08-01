<?php
require 'vendor/autoload.php'; // Include Composer autoloader

use Dompdf\Dompdf;

// Sample HTML content
$html = '<!DOCTYPE html>
<html>
<head>
    <title>Sample PDF</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>This is a sample PDF generated using dompdf in Core PHP.</p>
</body>
</html>';

// Create a new Dompdf instance
$dompdf = new Dompdf();

// Load the HTML into the Dompdf instance
$dompdf->loadHtml($html);

// (Optional) Set paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the PDF
$dompdf->render();

// Output the PDF as a downloadable file with a specified filename
$dompdf->stream('sample.pdf', array('Attachment' => false));
