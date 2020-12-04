<?
require_once('connect.php');
require_once('tcpdf/tcpdf.php');


 function fetch_data()  
 {  
$servername = "localhost";
$database = "f0476776_language";
$username = "f0476776_ksuksu";
$password = "ksu";
$connection = mysqli_connect($servername, $username, $password, $database);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

      $output = '';  
      $result = mysqli_query($connection, "SELECT `application`.`app_id`,
      `application`.`app_name`,`application`.`app_version`,`razrab`.`raz_name`,
      `razrab`.`raz_city`,`lang`.`lang_proc`,`lang`.`lang_type`
      FROM `application` LEFT JOIN `razrab` 
      ON `application`.`raz_id`=`razrab`.`raz_id` 
      LEFT JOIN `lang` 
      ON `application`.`lang_id`=`lang`.`lang_id`");
      while($row = mysqli_fetch_array($result))  
      {
      $output .= '<tr>  
                          <td>'.$row['app_id'].'</td>  
                          <td>'.$row['app_name'].'</td>  
                          <td>'.$row['app_version'].'</td>  
                          <td>'.$row['raz_name'].'</td>  
                          <td>'.$row['raz_city'].'</td>
                          <td>'.$row['lang_proc'].'</td>  
                          <td>'.$row['lang_type'].'</td>  
                     </tr>  
                          ';  
      }  
      return $output;  
}

$obj_pdf = new tcpdf('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$obj_pdf-> SetTitle("Приложения.");
$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
$obj_pdf->SetDefaultMonospacedFont('helvetica');  
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
$obj_pdf->setPrintHeader(false);  
$obj_pdf->setPrintFooter(false);  
$obj_pdf->SetAutoPageBreak(TRUE, 10);  
$obj_pdf->setFontSubsetting(true);
$obj_pdf->SetFont('helvetica', '', 12);  
$obj_pdf->AddPage();

$content = '';  
$content .= ' 
      <h3 align="center">Applications</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th>ID</th>  
                <th>App`s name</th>  
                <th>Version</th>  
                <th>Developer</th>  
                <th>City</th>
                <th>Processing type</th> 
                <th>Type</th> 
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('applications.pdf', 'I');  
 
?>
