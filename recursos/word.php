<?php
require_once 'PHPWord-Master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();
use PhpOffice\PhpWord\TemplateProcessor;

$templateWord=new TemplateProcessor('plantilla.docx');
$titulo=$_POST['titulo'];
$intro=$_POST['intro'];
$id_problema=$_POST['id_problema'];
$justificacion=$_POST['justificacion'];
$proposito=$_POST['proposito'];
$metas=$_POST['metas'];
$marco=$_POST['marco'];
$diseno=$_POST['diseno'];
$recursos=$_POST['recursos'];
$recomendaciones=$_POST['recomendaciones'];
$biblio=$_POST['biblio'];
$conclusiones=$_POST['conclusiones'];
$crono=$_POST['cronograma'];
$resultados=$_POST['resultados'];

$templateWord->setValue('intro',$intro);
$templateWord->setValue('id_problema',$id_problema);
$templateWord->setValue('resultados',$resultados);
$templateWord->setValue('titulo',$titulo);
$templateWord->setValue('justificacion',$justificacion);
$templateWord->setValue('proposito',$proposito);
$templateWord->setValue('metas',$metas);

$templateWord->setValue('recursos',$recursos);
$templateWord->setValue('recomendaciones',$recomendaciones);
$templateWord->setValue('biblio',$biblio);
$templateWord->setValue('conclusiones',$conclusiones);
$templateWord->setValue('cronograma',$crono);

$templateWord->saveAs('prae.docx');
  header("Content-Disposition: attachment; filename=prae.docx; charset=iso-8859-1");
        echo file_get_contents('prae.docx');
?>