<?php

//require_once ('../config/lang/eng.php');
//required_once(dirname(__FILE__).'/tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('SUSHMITA KUMARI');
$pdf->SetTitle('PALEO PROPERTY');
$pdf->SetSubject('MONTHLY FINANCIAL REPORT');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);
// add a page
$pdf->AddPage();
$HEADING=<<<EOD
<h3>DATABASE OF CONSUMER</h3>
EOD;

$pdf->writeHTMLCell(0,0,'','',$HEADING,0,1,0,true,'C',true);
// output the HTML content
//$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
$pdf->Ln(4);
$tb1='<table  style ="border : 1px solid #000;padding:6px;">';
$tb1.='<tr>

<th style ="border : 1px solid #000;">consumer_id</th>

			<th  style ="border : 1px solid #000;">user_name</th>
			<th  style ="border : 1px solid #000;">city</th>
			<th  style ="border : 1px solid #000;">road</th>
			<th  style ="border : 1px solid #000;">district</th>
			<th  style ="border : 1px solid #000;">state</th>
			<th  style ="border : 1px solid #000;">countery</th>
			<th  style ="border : 1px solid #000;">pin</th>
			
</tr>';

foreach($consumers as $record){
		$tb1.='<tr>
			
			<td  style ="border : 1px solid #000;">'.$record->consumer_id.'</td>
			
			<td  style ="border : 1px solid #000;">'.$record->user_name.'</td>
			<td  style ="border : 1px solid #000;">'.$record->city.'</td>
			<td  style ="border : 1px solid #000;">'.$record->road.'</td>
			<td  style ="border : 1px solid #000;">'.$record->district.'</td>
			<td  style ="border : 1px solid #000;">'.$record->state.'</td>
			<td  style ="border : 1px solid #000;">'.$record->countery.'</td>
			<td  style ="border : 1px solid #000;">'.$record->pin.'</td>
		
			</tr>';
}
$tb1.='</table>';
$pdf->writeHTMLCell(0,0,'','',$tb1,0,1,0,true,'C',true);
$myfile=fopen("property_details.txt","r") or die("unable to open  a file");

if($myfile){
	$pdf->AddPage();
	while(!feof($myfile)){
		$pdf->writeHTMLCell(0,0,'','',fgets($myfile),0,1,0,true,'C',true);
	}
}
fclose($myfile);
//$tb1=utf8_encode($tb1);
//$pdf->writeHTML($tb1,true,false,false,false,'');
// ---------------------------------------------------------

ob_clean();
//Close and output PDF document
$pdf->Output('MONTHLY REPORT.pdf', 'I');
end_ob_clean();
//============================================================+
// END OF FILE
//============================================================+


