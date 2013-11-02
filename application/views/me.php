<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
  <div class="navbar-header">
    <script src="path/to/javascripts/bootstrap-rating-input.min.js" type="text/javascript"></script>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand brandTitle" href="<?php echo base_url('index.php/console'); ?>">
    <i class="fa fa-beer"></i>
     </a>
  </div>
   <form class="navbar-form navbar-left" method="POST" action="/~cs3380f13grp12/rate.php">
          <div class='form-group'>
          <input type="text" class="typeahead form-control" name='brand' placeholder="booze">
          </div>
          <div class='form-group'>
          <input type="submit" class='btn btn-default'>
          </div>
    </form>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
  <ul class="nav navbar-nav">
    <li><a href="">Option</a></li>
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
  <body>
    <div class="container">
      <br /><br />
      <div class='text-center'>
      <p class='center' style="font-size:30px;">
        <i class="fa fa-beer"></i>
      </p>
    </div>
    <script type='text/javascript'>
      
      $('.typeahead').typeahead({                                
        name: 'countries',                                                          
        prefetch: 'prefetch.php',
        limit: 100                                                                   
      });

    </script>

  </body>
</html>


