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



<form class="bg-gray-400 p-4 m-2"  action="add.php" method="POST">

<label class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
<input type="text" class="form-control  mb-4" name="name" placeholder="Enter name" required="">

<label class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
<input type="email" class="form-control  mb-4" name="email" placeholder="Enter email" required="">
<label class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
<input type="text" class="form-control mb-4" name="username" placeholder="Enter username" required="">

<label class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
<input type="password" class="form-control mb-4" name="password" placeholder="Enter password" required="">

<input type="submit" name="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"  value="Submit">
</form>
