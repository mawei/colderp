<?php

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Shared\Date;

// require __DIR__ . '/../Header.php';
require_once __DIR__ . '/../../src/Bootstrap.php';


$helper = new Sample();
if ($helper->isCli()) {
    $helper->log('This example should only be run from a Web Browser' . PHP_EOL);

    return;
}
$reader = IOFactory::createReader('Xlsx');

$spreadsheet = $reader->load(__DIR__ . '/../mytemplates/sale.xlsx');

// $helper->log('Add new data to the template');
$data = [
    ['title' => 'Excel for dummies',
        'price' => 17.99,
        'quantity' => 2,
    ],
        ['title' => 'Excel for dummies',
        'price' => 17.99,
        'quantity' => 2,
    ],
        ['title' => 'Excel for dummies',
        'price' => 17.99,
        'quantity' => 2,
    ],
        ['title' => 'Excel for dummies',
        'price' => 17.99,
        'quantity' => 2,
    ],
        ['title' => 'Excel for dummies',
        'price' => 17.99,
        'quantity' => 2,
    ],

];

$spreadsheet->getActiveSheet()->setCellValue('D1', Date::PHPToExcel(time()));

$baseRow = 5;
foreach ($data as $r => $dataRow) {
    $row = $baseRow + $r;
    $spreadsheet->getActiveSheet()->insertNewRowBefore($row, 1);

    $spreadsheet->getActiveSheet()->setCellValue('A' . $row, $r + 1)
        ->setCellValue('B' . $row, $dataRow['title'])
        ->setCellValue('C' . $row, $dataRow['price'])
        ->setCellValue('D' . $row, $dataRow['quantity'])
        ->setCellValue('E' . $row, '=C' . $row . '*D' . $row);
}
$spreadsheet->getActiveSheet()->removeRow($baseRow - 1, 1);

// Rename worksheet
$spreadsheet->getActiveSheet()->setTitle('Simple');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Xls)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="sale.xlsx"');
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
