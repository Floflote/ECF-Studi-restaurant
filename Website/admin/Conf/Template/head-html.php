<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, , initial-scale=1.0" />
  <meta name="description" content=<?php echo $description; ?> />
  <meta name="keywords" content=<?php echo $keywords; ?> />
  <meta name="author" content="FloFlote">
  <title><?php echo $title; ?></title>

  <!-- Framework CSS -->

  <link rel="stylesheet" type="text/css" href="./Design/CSS/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./Design/Font/css/all.min.css">

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="./Design/CSS/admin.css">

  <!-- Add Google fonts -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <!-- Enable tooltips -->
  <script src="./Design/JS/jquery-3.6.3.min.js"></script>
  <script src="./Design/JS/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      $('[data-bs-toggle="tooltip"]').tooltip();
    });
  </script>



</head>

<!-- Body -->

<body>