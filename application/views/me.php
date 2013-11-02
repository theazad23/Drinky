<nav class="navbar navbar-default" role="navigation">
  <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand brandTitle" href="<?php echo base_url('index.php/console'); ?>"> Drinky </a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
  <ul class="nav navbar-nav">
    <li><a href="">OPTION</a></li>
  </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown" >
        <a href="#" class="text-danger dropdown-toggle" data-toggle="dropdown" >
          <?php echo $username ?>
          <b class="caret"></b></a>
          <ul class="dropdown-menu">
          <li><a href="logout">Log out</a></li>
        </ul>
      </li>
    </ul>
  </div>
 </div>
</nav>
</div>