<?php include './view/partials/__head.php'?>

<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <?php include './view/partials/header.php'?>
  <?php include './view/partials/navBar.php'?>
  <?php include './view/partials/slider.php'?>
  
  <div class="content-wrapper">
    
    <?php include './view/partials/content-header.php'?>
    <?php include "./view/pages/".$page ?>
    

  </div>

  <?php include './view/partials/footer.php' ?>
</div>
<?php include './view/partials/__foot.php'?>
