<?php
//============================================================+
// File name   : mio.php
// Begin       : 2009-03-20
// Last Update : 2013-05-14
//
// Description : Example 048 for TCPDF class
//               HTML tables and table headers
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: HTML tables and table headers
 * @author Nicola Asuni
 * @since 2009-03-20
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Tecnicos IRCS');
$pdf->SetTitle('Formulario');
$pdf->SetSubject('Servicio IRCS');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);
$pdf->SetHeaderData('images/images.dyc', PDF_HEADER_LOGO_WIDTH, 'ASISTENCIA IRCS', PDF_HEADER_STRING);

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
if (@file_exists(dirname(__FILE__).'/lang/spa.php')) {
	require_once(dirname(__FILE__).'/lang/spa.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 16);

// add a page
$pdf->AddPage();

$pdf->Write(0, 'Resumen Asistencia IRCS', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 7);



// -----------------------------------------------------------------------------

$tbl = <<<EOD


<table border="1" >

<tr>
    <th colspan="16" style="text-align:center; height:14px">SERVICIO DE ATENCION A UNIDADES REEFERS (24/7)</th>
</tr>

<tr>
    <th colspan="16" style="text-align:center; height:14px; font-weight:bold">SERVICE OF ATTENTION TO REEFERS UNITS (24/7)</th>
</tr>

<tr>
    <br>
</tr>

<tr>
    <th colspan="4">FECHA (DATE)</th><th colspan="12" ></th>
</tr>

<tr>
    <th colspan="4" style="border-right:1px solid transparent">LUGAR (TERMINAL) (PLACE)</th><th colspan="12" ></th>
</tr>

<tr>
    <th colspan="5" style="text-align:left;">SERVICIO SOLICITADO POR(REQUESTED BY)</th> <th colspan="3" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;">TECNICO (TECHNICIAN)</th> <th colspan="5" style="text-align:left;"></th>
</tr>

<tr>
    <th colspan="5" style="text-align:left;">NAVIERA(SHIPPER OWNER)</th> <th colspan="3" style="text-align:left;"></th>
    <th colspan="4" style="text-align:left;">N° UNIDAD(CONTAINER UNIT)</th> <th colspan="4" style="text-align:left;"></th>
</tr>

<tr>
    <th colspan="5" style="text-align:left;">NAVE(VESSEL)</th> <th colspan="3" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;">MAQUINARIA(MACHINERY)</th> <th colspan="5" style="text-align:left;"></th>
</tr>


<tr>
    <br>
</tr>

<tr>
    <th colspan="3" style="text-align:left;">HORA INICIO SERVICIO</th>
    <th colspan="3" style="text-align:left;"></th>

    <th rowspan="12" colspan="4" style="text-align:left;"><img src="images/dyc.jpg"></th>

    <th colspan="3" style="text-align:left;">HORA TERMINO SERVICIO</th>
    <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="3" style="text-align:left; font-weight:bold">START TIME SERVICE</th> <th colspan="3" style="text-align:left;"></th>

    <th colspan="3" style="text-align:left; font-weight:bold">END TIME SERVICE</th> <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="3" style="text-align:left;">SET POINT</th> <th colspan="3" style="text-align:left;"></th>

    <th colspan="3" style="text-align:left;">SET POINT</th> <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="3" style="text-align:left;">VENTILATION</th> <th colspan="3" style="text-align:left;"></th>

    <th colspan="3" style="text-align:left;">VENTILATION</th> <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="3" style="text-align:left;">RETURN</th> <th colspan="3" style="text-align:left;"></th>

    <th colspan="3" style="text-align:left;">RETURN</th> <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="3" style="text-align:left;">SUPPLY</th> <th colspan="3" style="text-align:left;"></th>

    <th colspan="3" style="text-align:left;">SUPPLY</th> <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="3" style="text-align:left;">SET POINT O2%</th> <th colspan="3" style="text-align:left;"></th>

    <th colspan="3" style="text-align:left;">SET POINT O2%</th> <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="3" style="text-align:left;">O2%</th> <th colspan="3" style="text-align:left;"></th>

    <th colspan="3" style="text-align:left;">O2%</th> <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="3" style="text-align:left;">SET POINT CO2</th> <th colspan="3" style="text-align:left;"></th>

    <th colspan="3" style="text-align:left;">SET POINT CO2</th> <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="3" style="text-align:left;">CO2%</th> <th colspan="3" style="text-align:left;"></th>

    <th colspan="3" style="text-align:left;">CO2%</th> <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="3" style="text-align:left;">PHOTOS</th> <th colspan="3" style="text-align:left;"></th>

    <th colspan="3" style="text-align:left;">PHOTOS</th> <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="3" style="text-align:left;">ALARMS</th> <th colspan="3" style="text-align:left;"></th>

    <th colspan="3" style="text-align:left;">ALARMS</th> <th colspan="3" style="text-align:left;"></th>
</tr>

<tr>
    <br>
</tr>

<tr>
    <th colspan="4" style="text-align:left;">DATA ONLY FOR REPAIR COMPANY</th>
</tr>

<tr>
    <th colspan="6" style="text-align:left;">DAÑO ATRIBUIBLE A TERCEROS</th>
    <th colspan="2" style="text-align:left;">SI/NO</th>
    <th colspan="8" style="text-align:left;"></th>
</tr>

<tr>
    <th colspan="16" style="text-align:left;">ES (SI). IDENTIFICACIÓN DE TERCEROS</th>
</tr>


<tr>
    <br>
</tr>

<tr>
    <th colspan="16" height="14" style="text-align:center; background-color:#E4E4E4">CONDICION INICIAL <strong>(INITIAL CONDITION - BEFORE REPAIR)</strong></th>
</tr>

<tr>
    <th colspan="16" style="text-align:left;">DIAGNÓSTICO / DETALLES ASISTENCIA <strong>(DIAGNOSTICS/DETAILS ASSITANCE)</strong></th>
</tr>
<tr>
    <th colspan="16" style="text-align:left;"><br><br><br><br></th>
</tr>
<tr>
    <br>
</tr>

<tr>
    <th colspan="16" style="text-align:left;">DESCRIPCION REPARACIÓN / ACCIÓN <strong>(DESCRIPTION REPAIR /ACTION)</strong></th>
</tr>
<tr>
    <th colspan="16" style="text-align:left;"><br><br><br><br></th>
</tr>
<tr>
    <br>
</tr>

<tr>
    <th colspan="16" style="text-align:center">REPUESTOS USADOS <strong>(USED PARTS)</strong></th>
</tr>

<tr>
    <th colspan="5" style="text-align:left;"><strong>PART NUMBER</strong></th>
    <th colspan="5" style="text-align:left;"><strong>DESCRIPTION</strong></th>
    <th colspan="3" style="text-align:left;"><strong>QUANTITY</strong></th>
    <th colspan="3" style="text-align:left;"><strong>WARRANTY</strong></th>
</tr>
<tr>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
</tr>
<tr>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="5" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
    <th colspan="3" style="text-align:left;"></th>
</tr>

<tr>
    <br>
</tr>

<tr>
    <th colspan="16" style="text-align:center">CONDICIÓN FINAL <strong>(FINAL CONDITION - AFTER REPAIR)</strong></th>
</tr>
<tr>
    <br>
</tr>


<tr>
    <th colspan="1" style="text-align:left;"></th>
    <th colspan="5" style="text-align:left;">UNIDAD OPERATIVA <strong>(OPERATIVE UNIT)</strong></th>
    <th colspan="1" style="text-align:left;"></th>

    <th colspan="2" style="text-align:left;"></th>

    <th colspan="5" style="text-align:left;">UNIDAD DAÑADA <strong>(DAMAGED UNIT)</strong></th>
    <th colspan="1" style="text-align:left;"></th>
</tr>

<tr>
    <br>
</tr>

<tr>
    <th colspan="16" style="text-align:left">NOTAS <strong>(REMARKS)</strong></th>
</tr>

<tr>
    <th colspan="16" style="text-align:center"><br><br><br><br></th>
</tr>

<tr>
    <br><br>
</tr>

<tr>
    <th colspan="2" style="text-align:left; border: 0px solid transparent"></th>
    <th colspan="3" style="text-align:center;"><strong>Nombre / Firma       Representante Cliente</strong></th>
    <th colspan="2" style="text-align:left;"></th>

    <th colspan="3" style="text-align:center;"><strong>José Patricio Latorre       Depósito y Contenedores S.A.   Encargado 24/7</strong></th>

    <th colspan="2" style="text-align:left;"></th>
    <th colspan="3" style="text-align:center;"><strong>Nombre / Firma               Técnico Reefer</strong></th>
</tr>


</table>


EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');


// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('asistencia.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
