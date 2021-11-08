
<?php
  include("models/userclass.php");

  $objUser = new User();

  if(isset($_GET['update_id']) && !empty($_GET['update_id']))
  {
      $update_id = $_GET['update_id'];
      $res = $objUser->displyaRecordById($update_id );
  }

  if(isset($_POST['update'])) {

    $update = $_POST['update'];
    $objUser->update($_POST);
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">
</head>
<body>


  <div class="grid grid-cols-2">
    <div class="bg-gray-400 p-4 text-3xl"> This is a PHP OOP CRUD </div>
    <div class="bg-gray-400 text-right p-4">  <a href="add.php"><button class="btn btn-success text-2xl ">Add new record <i class="fas fa-plus"></i></button></a></div>
  </div>




<form  class="bg-gray-400 p-4 m-2"  action="edit.php" method="POST">


<label class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
<input type="text" name="name" value="<?php echo $res['name']; ?>">
<label class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
<input type="text" name="email" value="<?php echo $res['email']; ?>">
<label class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
<input type="text" name="username" value="<?php echo $res['username']; ?>">
<label class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
<input type="text" name="password" value="<?php echo $res['password']; ?>">
<input type="hidden" name="id" value="<?php echo $res['id']; ?>">
<input type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" name="update" value="update">
<?php ?>

<?php  ?>
</form>


</body>
</html>
