<?

require_once('connect.php');
$id = $_GET['id'];

mysqli_query($connection, "DELETE FROM application WHERE `application`.`app_id` = '$id'");

header("Location: index.php");

?>