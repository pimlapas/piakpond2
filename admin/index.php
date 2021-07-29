  <?php include('hder.php'); //css 

 
  ?>

  <body>
    <?php include('nav.php'); //menu 
    ?>
    <!-- content -->
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <?php include('menu_l.php'); ?>
        </div>
        <div class="col-md-10">
        <center><img src="../img/logo.png"  width="30%" ></center>
        
          <h3 align="center"> Admin Page
            <br>
            หน้าจัดการเมนูอาหาร
            <?php echo $name; ?>
          </h3>
        
        </div>
      </div>
    </div>
    <?php include('footer.php'); //footer
    ?>
  </body>
  <?php include('js.php'); //js
  ?>