<link rel="stylesheet" href="<?php echo base_url('css/custom.css'); ?>" />

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand brandTitle" href="<?php echo base_url(''); ?>">
    <i class="fa fa-glass"></i>
     </a>
  </div>
    <form action="rate">

   <div class="navbar-form navbar-left">
          <div class='form-group'>
          <input type="text" class="typeahead input" name='brand' placeholder="Search drinks">
          </div>
          <div class='form-group'>
          </div>
          <input type="submit" value = "Search" class='btn btn-default'>
          </div>
    </form>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
  <ul class="nav navbar-nav">
  </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown" >
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
          <?php echo $username; ?>
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

    <script type='text/javascript'>
      $('.typeahead').typeahead({                                
        name: 'brands',                                                          
        prefetch: "<?php echo base_url('/index.php/me/getDrinks'); ?>",
        limit: 1000                                                                   
      });
    </script>

  </body>
</html>


