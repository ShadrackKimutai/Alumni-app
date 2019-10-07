@php
    ob_end_clean();
    Fpdf::SetCreator("Script by Shadrack Kimutai (0724226334)");
    Fpdf::SetDisplayMode('real');
    Fpdf::AddPage();
    Fpdf::setSourceFile('form.pdf');
    Fpdf::SetFont('Arial', 'B', 18);
    Fpdf::Cell(50, 25, 'Hello World!');
    Fpdf::Output();
  
@endphp