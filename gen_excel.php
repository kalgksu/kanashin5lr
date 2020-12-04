<?
require_once('connect.php');
require_once('PHPExcel/Classes/PHPExcel.php');
require_once('PHPExcel/Classes/PHPExcel/Writer/Excel5.php');

$xls = new PHPExcel();
$xls->setActiveSheetIndex(0);
$sheet = $xls->getActiveSheet();
$sheet->setTitle('Приложения');

$zagolovok =array("ID",
                "App`s name",  
                "Version",  
                "Developer",  
                "City",
                "Processing type", 
                "Type" );
for($i = 0;$i<count($zagolovok);$i++)
$sheet->setCellValueByColumnAndRow($i,1,$zagolovok[$i]);

$result = mysqli_query($connection, "SELECT `application`.`app_id`,
      `application`.`app_name`,`application`.`app_version`,`razrab`.`raz_name`,
      `razrab`.`raz_city`,`lang`.`lang_proc`,`lang`.`lang_type`
      FROM `application` LEFT JOIN `razrab` 
      ON `application`.`raz_id`=`razrab`.`raz_id` 
      LEFT JOIN `lang` 
      ON `application`.`lang_id`=`lang`.`lang_id`");

$i=2;
while($row = mysqli_fetch_array($result))
{
  $sheet->setCellValueByColumnAndRow(0,$i,$row['app_id']);
   $sheet->setCellValueByColumnAndRow(1,$i,$row['app_name']);
    $sheet->setCellValueByColumnAndRow(2,$i,$row['app_version']);
     $sheet->setCellValueByColumnAndRow(3,$i,$row['raz_name']);
     $sheet->setCellValueByColumnAndRow(4,$i,$row['raz_city']);
      $sheet->setCellValueByColumnAndRow(5,$i,$row['lang_proc']);
      $sheet->setCellValueByColumnAndRow(6,$i,$row['lang_type']);
      $i++;
}  


// Выводим HTTP-заголовки
 header ( "Expires: Mon, 1 Apr 1974 05:00:00 GMT" );
 header ( "Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT" );
 header ( "Cache-Control: no-cache, must-revalidate" );
 header ( "Pragma: no-cache" );
 header ( "Content-type: application/vnd.ms-excel" );
 header ( "Content-Disposition: attachment; filename=Applications.xls" );

// Выводим содержимое файла
 $objWriter = new PHPExcel_Writer_Excel5($xls);
 $objWriter->save('php://output');
 ?>