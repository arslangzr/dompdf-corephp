<?php
require 'vendor/autoload.php'; // Include Composer autoloader

use Dompdf\Dompdf;
use Dompdf\Options;

// Read the HTML content from the "pdf.html" file
$html = file_get_contents('pdf.html');

$options = new Options();
$options->set('isRemoteEnabled', false);
$options->set('chroot', './assets/images'); // Set the base path for local images

// Create a new Dompdf instance
$dompdf = new Dompdf($options);

// Load the HTML into the Dompdf instance
$dompdf->loadHtml($html);

// (Optional) Set paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the PDF
$dompdf->render();

// Output the PDF as a downloadable file with a specified filename
$dompdf->stream('sample.pdf', array('Attachment' => false));
?>
