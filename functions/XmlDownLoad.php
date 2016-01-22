<?php
    require '/home/ontopgames/db-conHive.php';
    require "../models/SampleModel.php";
    $sampleModel = new SampleModel($pdo);

    $sampleList = $sampleModel -> getAllSamples();


/** PHPExcel */
include '/home/ontopgames/public_html/328/beehive/XML/PHPExcel.php';
include '/home/ontopgames/public_html/328/beehive/XML/PHPExcel/IOFactory.php';

/** PHPExcel_Writer_Excel2007 */
include '/home/ontopgames/public_html/328/beehive/XML/PHPExcel/Writer/Excel2007.php';

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set properties
$objPHPExcel->getProperties()->setCreator("");
$objPHPExcel->getProperties()->setLastModifiedBy("");
$objPHPExcel->getProperties()->setTitle("BeehiveSheet");
$objPHPExcel->getProperties()->setSubject("BeehiveSheet");
$objPHPExcel->getProperties()->setDescription("A list of behives and their mite information");





// Add some data
$i = 2;
//$downloadList = clone $sampleList;
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->mergeCells('A1:B1');
$objPHPExcel->getActiveSheet()->mergeCells('C1:D1');
$objPHPExcel->getActiveSheet()->mergeCells('E1:F1');
$objPHPExcel->getActiveSheet()->mergeCells('G1:H1');
$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Hive_Id');
$objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Collection Date');
$objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Current Period');
$objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Mite Count');
foreach ($sampleList as $row) {
    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->mergeCells(('A'.$i.':B'.$i));
    $objPHPExcel->getActiveSheet()->mergeCells(('C'.$i.':D'.$i));
    $objPHPExcel->getActiveSheet()->mergeCells(('E'.$i.':F'.$i));
    $objPHPExcel->getActiveSheet()->mergeCells(('G'.$i.':H'.$i));
    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$i, $row['id']);
    $objPHPExcel->getActiveSheet()->SetCellValue('C'.$i, $row['date']);
    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$i, $row['period']);
    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$i, $row['count']);
    $i++;
}

$objPHPExcel->getActiveSheet()->setTitle('sample');

  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Sample.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
print "?";


?>
