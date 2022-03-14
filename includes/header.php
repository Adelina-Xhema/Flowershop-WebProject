
      <div class="header-div">
      <div class="img-div">
        <a href="index.php"><img src="images/flower1.png" alt="" >
        </div>
        <div class="list-div">
          <ul class="nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="produktet.php">Products</a></li>
            <li> <a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            
      <?php 
        if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1){
        ?>
        <li><a href="views/dashboard.php">Dashboard</a></li>
        <?php
        }
        ?>

        <?php if(isset($_SESSION['roli'])): ?>
        <li><a href="logout.php">Logout</a></li>
    <?php else: ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>
    <?php endif; ?>

</ul>

  </div>
      </div> 
      
