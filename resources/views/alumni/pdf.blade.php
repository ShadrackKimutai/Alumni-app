@php
    use setasign\Fpdi\Fpdi;
    $pdf = new Fpdi();
    $pdf->SetCreator("Script by Shadrack Kimutai (0724226334)");
    $pdf->SetDisplayMode('real');
    $pdf->AddPage();
    $pdf->setSourceFile('form.pdf'); 
    $tplIdx = $pdf->importPage(1); 
    $pdf->useTemplate($tplIdx, 0, 0); 

    $pdf->SetFont('Helvetica', '', 12);
    $pdf->Text(40,76, strtoupper($alumni->fullname));
    $pdf->Text(147,76,strtoupper($alumni->adm));
    $pdf->Text(55,84,strtoupper($alumni->dept));
    $pdf->Text(43,93,strtoupper($alumni->course));
    $pdf->Text(43,101,strtoupper($alumni->level));
    $pdf->Text(70,110,$alumni->feyear);
    $pdf->Text(70,119,strtoupper($alumni->feser));
    $pdf->Text(58,128,$alumni->Bank);
    $pdf->Text(67,136,strtoupper($alumni->Trans));
   
    $pdf->Output();
    ob_flush();
@endphp