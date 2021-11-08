<?php
  include("models/userclass.php");

  $objUser = new User();

  if(isset($_POST['submit']))
  {
      $objUser->Add();
  }

  if(isset($_GET['del_id']) && !empty($_GET['del_id']))
  {
    $del_id = $_GET['del_id'];
    $objUser->delete($del_id);
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







    <div class="grid grid-cols-7 gap-1 p-4">

            <?php
            $std = $objUser->displayData();

            foreach ($std as $User) {
            ?>
            <div class="col-span-2 bg-gray-100 rounded-sm p-2"><?php echo $User['name'] ?></div>
            <div class="col-span-3 bg-gray-100 rounded-sm p-2"><?php echo $User['email'] ?></div>
            <div class="bg-gray-100 rounded-sm p-2"><?php echo $User['username'] ?></div>

            <div class="bg-gray-100 rounded-sm p-2">
              <a class="text-black" href="edit.php?update_id=<?php echo $User['id']; ?>">
            <i class="fas fa-edit"></i>  </a>

             <a href="index.php?del_id=<?php echo $User['id']; ?>" onclick="confirm('Are you sure want to delete this record')">
              <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
            </div>

        <?php } ?>

    </div>







</body>
</html>
