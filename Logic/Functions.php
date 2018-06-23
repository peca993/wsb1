<?php
include './DataBase.php';
include '../TCPDF-master/tcpdf.php';
include './Specification.php';
include './Order.php';
include './Product.php';
include './Customer.php';

ob_start();


function MakeAndIsnertSpecifications($customerName,$date,$description,$order,$discount,$editFlag){
    
   
           if($editFlag == -1){     //  INSERT NEW
            $customer = GetCustomerByName($customerName);
         
            $fileNameNew = uniqid('', true).".pdf";
    
            if (!file_exists('companies/'.$customer->name)) {  // Make a directory if not exist
                if(mkdir('companies/'.$customer->name, 0777, true));  
                    }
                
                
              
            $fileDestination = 'companies/'.$customer->name.'/'.$fileNameNew;
     
            $value = 0;
     //       $priceIndex = $customer->category + 1;
            foreach ($order as $line){
                /* $line[0] => brand
                 * $line[1] => product ID
                 * $line[2] => product name
                 * $line[3] => count
                 */
                
                
                
                $product = GetProcuctByID($line[1]);
       
                if($customer->category == 0){
                        $price = $product->price1;
                    }elseif ($customer->category == 1) { 
                        $price = $product->price2;
                    }elseif ($customer->category == 2) {
                        $price = $product->price3;
                    }elseif ($customer->category == 3) {
                        $price = $product->price4;
                    }elseif ($customer->category == 4) {
                        $price = $product->price5;
                    }elseif ($customer->category == 5) {
                        $price = $product->price6;
                    }elseif ($customer->category == 6) {
                        $price = $product->price7;
                    }elseif ($customer->category == 7) {
                        $price = $product->price8;
                    }elseif ($customer->category == 8) {
                        $price = $product->price9;
                    }elseif ($customer->category == 9) {
                        $price = $product->price10;
                    }elseif ($customer->category == 10) {
                        $price = $product->price11;
                    }elseif ($customer->category == 11) {
                        $price = $product->price12;
                    }elseif ($customer->category == 12) {
                        $price = $product->price13;
                    }elseif ($customer->category == 13) {
                        $price = $product->price14;
                    }elseif ($customer->category == 14) {
                        $price = $product->price15;
                    }

                    if($price == NULL){
                        $price = $product->price1;
                    }
                
                
                
                /*
                $singlePrice = $product->{"price".$priceIndex};
       
                if($singlePrice == NULL){
                    $singlePrice = $product->price1;
                }
                  
                 
                 */
                
                $value += $price * $line[3];
                }
            
            $value = ($value/100.00) * (100.00 -$discount);
            
            $specification = new Specification(
                    NULL, $customer->name, $date,
                    $fileDestination, $value, $discount, $description);      //!!!!!!!!!!!!!!!!
              
            InsertSpecificationDB($specification);
                      
            
           
             
            $specification = GetSpecificationByPath($fileDestination);
            
            foreach ($order as $line){
                $item = new Order(NULL,
                        $specification->id, 
                        $customer->id, 
                        $line[1],
                        $line[3]);
                InsertOrderDB($item);
            }
            
          
            
            $newFile = makePDF($specification->id,$fileNameNew, $customer, $date,$flag,$description,$order,$discount);
            
            ob_end_clean();    
            $newFile->Output($_SERVER["DOCUMENT_ROOT"].$fileDestination,'F');  //  SAVE PDF
            
          
            ob_end_clean();   
            $pdfShow = $newFile;
            $pdfShow->Output('Specifikacija.pdf','I');
            
            
            
           } 
           else   //  EDIT EXIST 
           {
               $customer = GetCustomerByName($customerName);
         
                $fileNameNew2 = uniqid('', true).".pdf";

                DeleteSpecification($editFlag);
                
                if (!file_exists('companies/'.$customer->name)) {  // Make a directory if not exist
                    if(mkdir('companies/'.$customer->name, 0777, true));  
                        }
                
                
              
                $fileDestination = 'companies/'.$customer->name.'/'.$fileNameNew2;
             
                
            $value = 0;
            $priceIndex = $customer->category + 1;
            foreach ($order as $line){
                /* $line[0] => brand
                 * $line[1] => product ID
                 * $line[2] => product name
                 * $line[3] => count
                 */
              
                
                  $product = GetProcuctByID($line[1]);
                
                if($customer->category == 0){
                        $price = $product->price1;
                    }elseif ($customer->category == 1) { 
                        $price = $product->price2;
                    }elseif ($customer->category == 2) {
                        $price = $product->price3;
                    }elseif ($customer->category == 3) {
                        $price = $product->price4;
                    }elseif ($customer->category == 4) {
                        $price = $product->price5;
                    }elseif ($customer->category == 5) {
                        $price = $product->price6;
                    }elseif ($customer->category == 6) {
                        $price = $product->price7;
                    }elseif ($customer->category == 7) {
                        $price = $product->price8;
                    }elseif ($customer->category == 8) {
                        $price = $product->price9;
                    }elseif ($customer->category == 9) {
                        $price = $product->price10;
                    }elseif ($customer->category == 10) {
                        $price = $product->price11;
                    }elseif ($customer->category == 11) {
                        $price = $product->price12;
                    }elseif ($customer->category == 12) {
                        $price = $product->price13;
                    }elseif ($customer->category == 13) {
                        $price = $product->price14;
                    }elseif ($customer->category == 14) {
                        $price = $product->price15;
                    }

                    if($price == NULL){
                        $price = $product->price1;
                    }

                $value += $price * $line[3];
                
                }
                $value = ($value/100.00) * (100.00 -$discount);
     
                
                $specification = new Specification(
                        $editFlag,
                        $customer->name,
                        $date,
                        $fileDestination,
                        $value,
                        $discount, 
                        $description);
                
                
                
                InsertSpecificationWithIDDB($specification);
                
                
            
            foreach ($order as $line){
                $item = new Order(NULL,
                        $specification->id, 
                        $customer->id, 
                        $line[1],
                        $line[3]);
                InsertOrderDB($item);
            }
            
            
           
            $newFile = makePDF($specification->id,$fileNameNew2, $customer, $date,$flag,$description,$order,$discount);
            
            ob_end_clean();    
            $newFile->Output($_SERVER["DOCUMENT_ROOT"].$fileDestination,'F');  //  SAVE PDF
            
          
            ob_end_clean();   
            $pdfShow = $newFile;
            $pdfShow->Output('Specifikacija.pdf','I');
            
            
            
            
            
            }
            
            
          
  
           
}
	
function DeleteSpecification($id){
    $specification = GetSpecificationByID($id);
    $path = $specification->path;
    $company = $specification->buyer;
    
    
    
    unlink($path);
    
    
    
    $open = 'companies/'.$company;

    if (!$files = glob($open . "/*")) {
        rmdir('companies/'.$company);
    }
    DeleteSpecificationDB($id);
}

function makePDF($specID,$pdfNameNew, $customer, $date,$flag,$description,$order,$discount){
 
    
    $pdf = new TCPDF("P", "mm", "A4", true, 'UTF-8', false);
    
// set document information
$pdf->SetCreator("Specification Master");
$pdf->SetAuthor('WSB');
$pdf->SetTitle('Specifikacija');    
    
// set default header data
$wsbPersonalData = "Bistricka 24/5 , 11060 Beograd \n"
        . "Tel: 069/103 55 55  069/105 88 58\n"
        . "E-mail: office@wsb.rs\n"
        . "PIB: 109637910\n"
        . "Tekuci racun: 160-392828-45";
        

$pdf->SetHeaderData("wsb-logo.png", PDF_HEADER_LOGO_WIDTH, 'WSB COMPANY D.O.O.', $wsbPersonalData);

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


// add a page
$pdf->AddPage();

// set font
$pdf->SetFont('freesans', '', 10);

$pdf->Write(0, "\nDatum: ".date("d.m.Y."), '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('freesans', 'B', 16);

$pdf->Write(0, "\nSpecifikacija: ".$specID."/".date("y"), '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('freesans', 'B', 10);

$pdf->Write(0, "\n\n".$customer->name, '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('freesans', '', 10);
$pdf->Write(0, $customer->address, '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, $customer->postCode." ".$customer->city."\n\n", '', 0, 'L', true, 0, false, false, 0);


// -----------------------------------------------------------------------------

$pdf->SetFont('freesans', '', 8);

// Table with rowspans and THEAD
$tblTop = "";
$tblTop = $tblTop."<div class='container'>";        
$tblTop = $tblTop.'<table class="table" border="1" cellpadding="2" cellspacing="1" >';
$tblTop = $tblTop.'<thead>';
$tblTop = $tblTop.'<tr>';
$tblTop = $tblTop.'<td width="30" ><b>Br.</b></td>';
if($discount > 0){
    $tblTop = $tblTop.'<td width="230" ><b>Artikal</b></td>';
}else{
    $tblTop = $tblTop.'<td width="360" ><b>Artikal</b></td>';
}
$tblTop = $tblTop.'<td width="30"><b>Jed. mere</b></td>';
$tblTop = $tblTop.'<td width="50"><b>Kolicina</b></td>';
$tblTop = $tblTop.'<td width="80"><b>Cena/JM</b></td>';

if($discount > 0){
    $tblTop = $tblTop.'<td width="50"><b>Popust %</b></td>';
    $tblTop = $tblTop.'<td width="80"><b>Cena sa popustom</b></td>';
}
$tblTop = $tblTop.'<td width="80"><b>Ukupno</b></td>';
$tblTop = $tblTop.'</tr>';
$tblTop = $tblTop.'</thead>';
        


$summaryPrice = 0;
$lineNumber = 1;
$tblMiddle = "";
foreach ($order as $line){
    $tblMiddle = $tblMiddle." <tr> ";
    
    //  Br.
    $tblMiddle = $tblMiddle.' <td width="30" > ';
    $tblMiddle = $tblMiddle." $lineNumber ";
    $tblMiddle = $tblMiddle." </td> ";
    
    //  Artikal
    if($discount > 0){
        $tblMiddle = $tblMiddle.' <td width="230"> ';
    }else{
        $tblMiddle = $tblMiddle.' <td width="360"> ';
    }
    $tblMiddle = $tblMiddle." $line[0] <br>";
    $tblMiddle = $tblMiddle." $line[2] ";
    $tblMiddle = $tblMiddle." </td> ";
    
    //  Jedinica mere
    $tblMiddle = $tblMiddle.' <td width="30"> ';
    $tblMiddle = $tblMiddle." kom ";
    $tblMiddle = $tblMiddle." </td> ";

    //  Kolicina
    $tblMiddle = $tblMiddle.' <td width="50"> ';
    $tblMiddle = $tblMiddle." $line[3] ";
    $tblMiddle = $tblMiddle." </td> "; 
    
    $product = GetProcuctByID($line[1]);
    $price;
    if($customer->category == 0){
        $price = $product->price1;
    }elseif ($customer->category == 1) { 
        $price = $product->price2;
    }elseif ($customer->category == 2) {
        $price = $product->price3;
    }elseif ($customer->category == 3) {
        $price = $product->price4;
    }elseif ($customer->category == 4) {
        $price = $product->price5;
    }elseif ($customer->category == 5) {
        $price = $product->price6;
    }elseif ($customer->category == 6) {
        $price = $product->price7;
    }elseif ($customer->category == 7) {
        $price = $product->price8;
    }elseif ($customer->category == 8) {
        $price = $product->price9;
    }elseif ($customer->category == 9) {
        $price = $product->price10;
    }elseif ($customer->category == 10) {
        $price = $product->price11;
    }elseif ($customer->category == 11) {
        $price = $product->price12;
    }elseif ($customer->category == 12) {
        $price = $product->price13;
    }elseif ($customer->category == 13) {
        $price = $product->price14;
    }elseif ($customer->category == 14) {
        $price = $product->price15;
    }
    
    if($price == NULL){
        $price = $product->price1;
    }
    
    //  Cena bez popusta
    $tblMiddle = $tblMiddle.' <td width="80"> ';
    $tblMiddle = $tblMiddle." $price ";
    $tblMiddle = $tblMiddle." </td> "; 
    
    $priceWithDiscount = $price /100.00 * (100.00 - $discount);
    
    if($discount > 0){
    //  Popust%
    $tblMiddle = $tblMiddle.' <td width="50"> ';
    $tblMiddle = $tblMiddle." $discount ";
    $tblMiddle = $tblMiddle." </td> ";
        
    
    //  Cena sa popustom
    $tblMiddle = $tblMiddle.' <td width="80"> ';
    $tblMiddle = $tblMiddle." $priceWithDiscount ";
    $tblMiddle = $tblMiddle." </td> ";
    }
    
    $priceCount = $line[3] * $priceWithDiscount;
    //  Ukupno
    $tblMiddle = $tblMiddle.' <td width="80"> ';
    $tblMiddle = $tblMiddle." $priceCount ";
    $tblMiddle = $tblMiddle." </td> ";
    
    $lineNumber++;
    $summaryPrice += $priceCount;
    $tblMiddle = $tblMiddle." </tr> ";
}
        
$tblBottom = <<<EOD
    </table>
</div>        
EOD;

$html = $tblTop.$tblMiddle.$tblBottom;



$pdf->writeHTML($html, true, false, false, false, '');


$pdf->SetFont('freesans', 'B', 8);
$pdf->Write(0, "\n\n"."Za uplatu:".$summaryPrice, '', 0, 'R', true, 0, false, false, 0);

$pdf->SetFont('freesans', '', 8);
$pdf->Write(0, "\n\nIzdao:_________________________", '', 0, 'R', true, 0, false, false, 0);

if($description != "" || $description != NULL){
    $pdf->Write(0, "\nNapomena:\n".$description, '', 0, 'L', true, 0, false, false, 0);
}

//============================================================+
// END OF FILE
//=================================================


    return $pdf;
  
}
