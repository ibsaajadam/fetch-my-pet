<?php
  include_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Find me Pets!</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Qahiri&display=swap');

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
      font-family: 'Qahiri', sans-serif;
      margin-left:20px;
      color:yellow;
      font-size: 40px;
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
    }

    .image {
      width: 80%;
    }

    @media (max-width: 849px ){
      .article-box {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <a href="/"><h1 class="title">find me pets!</h1></a>

  <div class="article-container">
    <?php
      $breed = $_GET['breed'];

      $sql = "SELECT * FROM dogs WHERE breed = '$breed'";
      $result = mysqli_query($conn, $sql);
      $queryResults = mysqli_num_rows($result);

      if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='article-box'>";
            echo "<h2>".$row['name']."</h2>";
            echo "<h3>".$row['breed']."</h3>";
            echo "<p>".$row['age']."</p>";
            echo "<p>".$row['gender']."</p>";
            echo "<img class='image' src='images/".$row['image']."'>";
            echo "<p>".$row['text']."</p>
          </div>";
        }
      }

    ?>
  </div>
  
</body>
</html>