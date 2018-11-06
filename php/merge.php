#!/usr/bin/php
<?php
	// print "$argc arguments were passed. In order: \n";

	// for ($i = 0; $i <= $argc -1; ++$i) {
	// 	print "$i: $argv[$i]\n";
	// }

	include './PDFMerger.php';

	$pdf = new \Clegginabox\PDFMerger\PDFMerger;

	$pdf
		->addPDF('../samples/sample.pdf', '9')
		->addPDF('../samples/pdf.pdf', '5')
		->addPDF('../samples/sample.pdf', '9')
		->merge('file', 'merged.pdf');
?>