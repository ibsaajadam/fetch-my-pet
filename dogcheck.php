<?php
include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>That's My Dog!</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    a {
      text-decoration: none;
    }

    body {
      background-color: dodgerblue;
    }

    .title {
      font-family: 'Open Sans', sans-serif;
      margin-left: 20px;
      color: yellow;
      font-size: 30px;
      margin: 20px;
    }

    .article-container {
      background-color: #fff;
      padding: 30px;
      width: 100%;
    }

    .article-box {
      padding-bottom: 10px;
      width: 50%;
      margin-top: 50px;
    }

    .image {
      width: 50%;
    }

    @media (max-width: 849px) {
      .article-box {
        width: 100%;
      }
    }
  </style>
</head>

<body>


  <a href="/">
    <h1 class="title">That's My Dog!</h1>
  </a>

  <div class="article-container">
    <?php
    if (isset($_POST['submit-search'])) {
      $search = $_POST['search'];
      $sql = "SELECT * FROM dogs WHERE breed LIKE '%$search%'";
      $result = mysqli_query($conn, $sql);
      $queryResult = mysqli_num_rows($result);

      echo "There are " . $queryResult . " results!<br><br>";

      if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "
        <div class='article-box'>
          <h2>" . $row['name'] . "</h2>
          <h3>" . $row['breed'] . "</h3>
          <p>" . $row['age'] . "</p>
          <p>" . $row['gender'] . "</p>
          <img class='image' src='images/" . $row['image'] . "'>
          <p>" . $row['text'] . "</p>
        </div>";
        }
      } else {
        echo "There are no results matching your search unfortunately.";
      }
    }

    ?>
  </div>

</body>

</html>