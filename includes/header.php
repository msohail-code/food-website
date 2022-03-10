<!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.php">Greenland Restaurant</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class='nav-item <?php echo ($page=="home")?"active":""; ?>'><a class="nav-link" href="index.php">Home</a></li> 
              <li class='nav-item <?php echo ($page=="about")?"active":""; ?>'><a class="nav-link" href="about.php">About</a></li> 
              
              <li class='nav-item <?php echo ($page=="menu")?"active":""; ?>'><a class="nav-link" href="menu.php">Menu</a></li>
              <li class='nav-item <?php echo ($page=="timing")?"active":""; ?>'><a class="nav-link" href="Timing.php">Timing</a></li>
              <li class='nav-item <?php echo ($page=="contact")?"active":""; ?>'><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->