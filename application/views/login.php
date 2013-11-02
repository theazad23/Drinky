<body>
  <div class="container" style='margin-top:50px;'>
  <div class="col-lg-4 col-lg-offset-4 text-center ">
    <h1 class='bigTitle'>
    Login
  </h1><br /><br />
  <div class="panel-body">
   <?php echo form_open('verify'); ?>

    <form class='form form-horizontal' method='POST'><br />
      <div class='form-group'>
        <input type="text" name="username" id="username" class="form-control input-" placeholder="User name">
      </div>
      <div class='form-group'>
        <input type="password" name="password" id="password" class="form-control input-" placeholder="Password">
      </div>
      <div class='form-group'>
        <input type='submit' value='Log in' class="btn btn-primary btn-block"></a>
      </div>
    </form>
  </div>
        <a href='register' class="btn btn-link btn-block">Create a new account</a>
      </div>