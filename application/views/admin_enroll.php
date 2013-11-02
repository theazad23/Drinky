    <div class="container" >
    <form class="form-horizontal" role="form" method="post" action="submitForm">
  
      <legend>Application Form</legend>

  <div class="panel-body">

  <div class="form-group">
    <label class="col-lg-3 control-label">Child Name</label>
    <div class="col-lg-5">
      <input type="test" class="form-control" name="child_firstname" placeholder="First name" required="required"  >
    </div>
  </div>

  <div class="form-group">
    <label class="col-lg-3 control-label"></label>
    <div class="col-lg-5">
      <input type="test" class="form-control" name="child_lastname" placeholder="Last name" required="required"  >
    </div>
  </div>

<hr>  

  <div class="form-group">
    <label class="col-lg-3 control-label">School</label>
    <div class="col-lg-2">
      <select class="form-control btn-default" name="school_select" required="required" >
        <option class="">Benton</option>
        <option class="">Lee</option>
        <option class="">Ridgeway</option>
      </select>
    </div>
    <label class="col-lg-1 control-label">Grade</label>
    <div class="col-lg-2  ">
      <select class="form-control btn-default" name="grade_select" required="required" >
        <option class="">K</option>
        <option class="">1</option>
        <option class="">2</option>
        <option class="">3</option>
        <option class="">4</option>
        <option class="">5</option>
      </select>
    </div>
  </div>
<hr>  

  <div class="form-group">
    <label class="col-lg-3 control-label">Gaurdian Name</label>
    <div class="col-lg-5">
      <input type="text" class="form-control" name="guardian_firstname" placeholder="First name" required="required"  >
    </div>
  </div>

  <div class="form-group">
    <label class="col-lg-3 control-label"></label>
    <div class="col-lg-5">
      <input type="childLastName" class="form-control" name="guardian_lastname" placeholder="Last name" required="required"  >
    </div>
  </div>

  <div class="form-group">
    <label class="col-lg-3 control-label">Phone</label>
    <div class="col-lg-3">
      <input type="tel" class="form-control" name="phone_number" placeholder="Phone Number" required="required"  >
    </div>
    <div class="col-lg-2">
      <input type="text" class="form-control" name="phone_ext" placeholder="Ext.">
    </div>  
  </div>


  <div class="form-group">
    <label class="col-lg-3 control-label">Email</label>
    <div class="col-lg-5">
      <input type="email" class="form-control" name="email" placeholder="Email" required="required">
    </div>
  </div>

<hr>  

  <div class="form-group">
    <label class="col-lg-3 control-label">Address</label>
    <div class="col-lg-5">
      <input type="text" class="form-control" name="student_addr1" placeholder="Street Address"  required="required"  >
    </div>
  </div>

  <div class="form-group">
    <label class="col-lg-3 control-label"></label>
    <div class="col-lg-5">
      <input type="text" class="form-control" name="student_city" placeholder="City"  required="required"  >
    </div>
  </div>


  <div class="form-group">
    <label class="col-lg-3 control-label"></label>
    <div class="col-lg-3">
      <select name="student_state" class="form-control"  required="required"> 
        <option value="OO" selected="selected">State</option> 
        <option value="AL">Alabama</option> 
        <option value="AK">Alaska</option> 
        <option value="AZ">Arizona</option> 
        <option value="AR">Arkansas</option> 
        <option value="CA">California</option> 
        <option value="CO">Colorado</option> 
        <option value="CT">Connecticut</option> 
        <option value="DE">Delaware</option> 
        <option value="DC">District Of Columbia</option> 
        <option value="FL">Florida</option> 
        <option value="GA">Georgia</option> 
        <option value="HI">Hawaii</option> 
        <option value="ID">Idaho</option> 
        <option value="IL">Illinois</option> 
        <option value="IN">Indiana</option> 
        <option value="IA">Iowa</option> 
        <option value="KS">Kansas</option> 
        <option value="KY">Kentucky</option> 
        <option value="LA">Louisiana</option> 
        <option value="ME">Maine</option> 
        <option value="MD">Maryland</option> 
        <option value="MA">Massachusetts</option> 
        <option value="MI">Michigan</option> 
        <option value="MN">Minnesota</option> 
        <option value="MS">Mississippi</option> 
        <option value="MO">Missouri</option> 
        <option value="MT">Montana</option> 
        <option value="NE">Nebraska</option> 
        <option value="NV">Nevada</option> 
        <option value="NH">New Hampshire</option> 
        <option value="NJ">New Jersey</option> 
        <option value="NM">New Mexico</option> 
        <option value="NY">New York</option> 
        <option value="NC">North Carolina</option> 
        <option value="ND">North Dakota</option> 
        <option value="OH">Ohio</option> 
        <option value="OK">Oklahoma</option> 
        <option value="OR">Oregon</option> 
        <option value="PA">Pennsylvania</option> 
        <option value="RI">Rhode Island</option> 
        <option value="SC">South Carolina</option> 
        <option value="SD">South Dakota</option> 
        <option value="TN">Tennessee</option> 
        <option value="TX">Texas</option> 
        <option value="UT">Utah</option> 
        <option value="VT">Vermont</option> 
        <option value="VA">Virginia</option> 
        <option value="WA">Washington</option> 
        <option value="WV">West Virginia</option> 
        <option value="WI">Wisconsin</option> 
        <option value="WY">Wyoming</option>
      </select>
    </div>
    <div class="col-lg-2">
      <input type="text" class="form-control" name="student_zip" placeholder="ZIP Code" required="required"  >
    </div>
    </div>
  </div>

  <div class="col-lg-offset-3 col-lg-5">
    <button type="submit" class="btn btn-lg btn-default">
      Submit app_formment Form
    </button>
  </div>
</div>

</div>
</form>
</div>

