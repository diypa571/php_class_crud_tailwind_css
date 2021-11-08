
<?php
header("Content-Type:application/json");
include("models/userclass.php");

$objUser = new User();

if(isset($_GET['id']) && !empty($_GET['id']))
{
$update_id = $_GET['id'];
$res = $objUser->displyaRecordById($update_id );
}

if(isset($_POST['update'])) {

$update = $_POST['update'];
$objUser->update($_POST);
}


if (isset($_GET['id']) && $_GET['id']!="") {
$userData['id'] = $res['id'];
$userData['name'] = $res['name'];
$userData['emaill'] = $res['email'];
$userData['username'] =  $res['username'];
$response["status"] = "true";
$response["message"] = "Customer Details";
$response["customers"] = $userData;

}
else{
$response["status"] = "false";
$response["message"] = "No customer(s) found!";
}
echo json_encode($response); exit;

?>
