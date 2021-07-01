<!DOCTYPE html>
<html>
    <head>
        <title>Reporte PDF</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    </head>
 
    <body>

    <?php  
    ob_start();
    include(dirname(__FILE__).'html2pdf/pdf_blanco.php');
    $content = ob_get_clean();
 
    //Se obtiene la librería
    require_once(dirname(__FILE__).'html2pdf/html2pdf.class.php');
 
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'es', true, 'UTF-8', 3);
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content);
        $html2pdf->Output('exemple03.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
print_r($dat_agen)
?>
 
    <div class="wrap">
            <header id="header_main">
                Reporte PDF
            </header>
 
            <section id="left">
                <div class="menu">
                    <a href="html2pdf/php/formulario.php" target="_blank">
                        <div class="inside"><img src=""></div>
                        <div class="titulo"><span>Crear PDF</span></div>
                    </a>
                </div>
            </section>
 
     </div>
    </body>
</html>