  <div class="container" style='margin-top:50px;'>
  <div class="col-md-4 col-md-offset-4 text-center ">
    <h1 class='bigTitle'>
      Log in
    </h1>
  <br />
  <div class="panel-body">
   <?php echo form_open('verify'); ?>
    <form class='form form-horizontal' method='POST' action='verify'><br />
      <div class='form-group'>
        <input type="text" name="username" id="username" class="form-control input-" placeholder="Email">
      </div>
      <div class='form-group'>
        <input type="password" name="password" id="password" class="form-control input-" placeholder="Password">
      </div>
      <div class='form-group'>
        <input type='submit' value='Log in' class="btn btn-primary btn-block"></a>
      </div>
    </form>
  </div>
  
      <p class='text-center text-sm text-muted'>Not a member?
        <a href='register' class="">Sign up</a>
    </p>
  </div>