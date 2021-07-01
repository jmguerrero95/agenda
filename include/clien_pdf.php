<?php
	ob_start();
    include('../paginas/clien_pdf.php');
    $content = ob_get_clean();

    require_once('../pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('p','letter','es');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('cliente.pdf');
?>
