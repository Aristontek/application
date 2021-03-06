<?php


$sheet = $this->excel->setActiveSheetIndex(0);
$sheet->setTitle(mb_strimwidth(lang('users_export_title'), 0, 28, "..."));  
$sheet->setCellValue('A1', lang('users_export_thead_id'));
$sheet->setCellValue('B1', lang('users_export_thead_firstname'));
$sheet->setCellValue('C1', lang('users_export_thead_lastname'));
$sheet->setCellValue('D1', lang('users_export_thead_email'));
$sheet->setCellValue('E1', lang('users_export_thead_manager'));

$sheet->getStyle('A1:E1')->getFont()->setBold(true);
$sheet->getStyle('A1:E1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$users = $this->users_model->getUsers();
$line = 2;
foreach ($users as $user) {
    $sheet->setCellValue('A' . $line, $user['id']);
    $sheet->setCellValue('B' . $line, $user['firstname']);
    $sheet->setCellValue('C' . $line, $user['lastname']);
    $sheet->setCellValue('D' . $line, $user['email']);
    $sheet->setCellValue('E' . $line, $user['manager']);
    $line++;
}


foreach(range('A', 'E') as $colD) {
    $sheet->getColumnDimension($colD)->setAutoSize(TRUE);
}

$filename = 'users.xls';
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
$objWriter->save('php://output');
