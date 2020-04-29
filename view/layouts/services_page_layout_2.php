<?php include './../view/partials/__head.php'?>

<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <?php include './../view/partials/header.php'?>
  <?php include './../view/partials/navBar.php'?>
  <?php $image = $image; include './../view/partials/banner.php'?>

  <div class="content-wrapper">
    
    <?php include './../view/partials/content-header.php'?>

    <div class="content">
        
      <?php include "./../view/pages/".$page ?>
      
    </div>

  </div>

  <?php include './../view/partials/footer.php' ?>
</div>
<?php include './../view/partials/__foot.php'?>
