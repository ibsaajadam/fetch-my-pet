<?php
  include_once 'db.php';

  $name = $_POST['name'];
  $breed = $_POST['breed'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];

  // Initialize message variable
  $msg = "";

  // If upload button is clicked...
  if (isset($_POST['submit-input'])){
    // capture image extension & file size errors
    $errors = array();

    // Get image name
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_type = $_FILES['image']['type'];
    $image_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

    
    $extensions = array("jpeg", "jpg", "png");

    if (in_array($image_ext, $extensions) === false){
      $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($image_size > 2097152){
      $errors[] = 'file size must be exactly 2 MB';
    }

    // Get text
    $image_text = mysqli_real_escape_string($conn, $_POST['image_text']);

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO dogs (name, breed, age, gender, image, text) VALUES ('$name', '$breed', '$age', '$gender', '$image', '$image_text');";
    // Then we run the request as a query in the database.
    mysqli_query($conn, $sql);

    if (empty($errors) === true){
      move_uploaded_file($image_tmp, $target);
      $_SESSION['msg'] = "image uploaded successfully";
      $_SESSION['valid'] = true;
    } else {
      // print_r($errors);
      $_SESSION['msg'] = "incorrect";
      $_SESSION['valid'] = false;
    }
  }

  $result = mysqli_query($conn, "SELECT * FROM dogs");

  header("Location: public/index.php?signup=success");

  ?>

