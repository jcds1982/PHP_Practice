<?php

require __DIR__ . '/../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'tempDir' => __DIR__ . '/tmp',
    'format' => 'A4',
]);


$mpdf->Line(100, 20, 200, 20);
$html = "
    <h1>mPDF Test</h1>
    <p>This is a PDF generated with mPDF.</p>
";

$mpdf->WriteHTML($html);
$mpdf->Output("test.pdf", "I");
