<?

require_once('connect.php');
$id = $_GET['id'];

mysqli_query($connection, "DELETE FROM lang WHERE `lang`.`lang_id` = '$id'");

header("Location: index.php");

?>