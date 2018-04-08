<?php


use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Shared\Date;

// require __DIR__ . '/../Header.php';
require_once __DIR__ . '/../../src/Bootstrap.php';
require_once __DIR__ . '/CnyTool.php';

error_reporting(E_ALL);
ini_set('display_errors','On');




$helper = new Sample();
if ($helper->isCli()) {
    $helper->log('This example should only be run from a Web Browser' . PHP_EOL);

    return;
}
$reader = IOFactory::createReader('Xlsx');

$spreadsheet = $reader->load(__DIR__ . '/../mytemplates/sale.xlsx');
// $helper->log('Add new data to the template');
// var_dump(json_decode($_POST['order']));die();
$orders = json_decode($_GET['order']);
// $orders = array();


$spreadsheet->getActiveSheet()->setCellValue('D1', Date::PHPToExcel(time()));

$baseRow = 9;
$number = 0;
$total = 0;
foreach ($orders as $r => $order) {
    $row = $baseRow + $r;
    $spreadsheet->getActiveSheet()->insertNewRowBefore($row, 1);
    $number = $number + $order->number;
    $total = $total + $order->number * $order->price;
    $spreadsheet->getActiveSheet()
        ->setCellValue('A' . $row, $order->product_id)
        ->setCellValue('B' . $row, $order->name)
        ->setCellValue('C' . $row, $order->unit)
        ->setCellValue('D' . $row, $order->number)
        ->setCellValue('E' . $row, $order->price)
        ->setCellValue('F' . $row, '=D' . $row . '*E' . $row);
}

date_default_timezone_set("Asia/Shanghai");
$spreadsheet->getActiveSheet()->setCellValue('B5', date('Y-m-d'));
$spreadsheet->getActiveSheet()->setCellValue('B6', $orders[0]->customer_name);
$spreadsheet->getActiveSheet()->setCellValue('D5', $orders[0]->sale_id);
$spreadsheet->getActiveSheet()->setCellValue('D' . ($row + 2), $number);
$spreadsheet->getActiveSheet()->setCellValue('F' . ($row + 2), $total);
$CnyTool = new CnyTool();
$bigCny = $CnyTool->num2rmb($total);
$spreadsheet->getActiveSheet()->setCellValue('B' . ($row + 3), $bigCny);



$spreadsheet->getActiveSheet()->removeRow($baseRow - 1, 1);

// Rename worksheet
$spreadsheet->getActiveSheet()->setTitle('销售订单');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

$writer = new \PhpOffice\PhpSpreadsheet\Writer\Html($spreadsheet);
$writer->save('./print/sale'.$orders[0]->sale_id.".htm");
$url = '/phpspreadsheet/phpoffice/phpspreadsheet/samples/colderp/print/sale'.$orders[0]->sale_id.'.htm';
$url = str_replace("/index.php", "", $url);
header("Location: {$url}");
die();

// Redirect output to a client’s web browser (Xls)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="销售单'.$orders[0]->sale_id.'.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: public'); // HTTP/1.0

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');


exit;
