<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <!-- change row color on hover -->
    <style>
      .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
        background-color: #ffd942;
        cursor: pointer;
      }
    </style>
    <title>Falcontrac</title>
</head>

<body>
  <?php require('../components/navbar.php') ?>
  <div class="container">
<div class="p-1 rounded text-center mt-3 " style="background-color: rgb(216, 216, 216);">

  <h1 class="" style="color: gray;">
ISSUE MONITOR</h1>
</div>
    <div class="d-flex justify-content-center ">
      <?php 
  require('../components/monitor-table/monitorTable.php')
  ?>
    </div>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>