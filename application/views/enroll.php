<?php
  $school_options = "";
  // Make select lists for each school and grade
  foreach($schools as $s => $school) { 
    $school_options .= "<option value='$school->school_name'>".$school->school_name."</option>";
    $school->grade_options = "";
    foreach($school->grades as $g => $grade) {
      $school->grade_options .= "<option>".$grade->grade."</option>";
    }
  }
?>
<div class="container" >
  <div class="text-center">
    <div class="page-header"><h1>Lottery Application Form</h1></div>
  </div>
</div>

<form class="form-horizontal" role="form" method="POST" action="submitForm">
 <div class="container">
  <div class="col-lg-offset-2 col-lg-8">
	<div class="panel panel-primary">
		<div class="panel-heading"><h3 class="panel-title">School Information</h3></div>
		<div class="panel-body">
		<br/>
  		<div class="form-group">
    			<label class="col-lg-3 control-label">School</label>
    			<div class="col-lg-3">
		      	<select class="form-control btn-default school_select" name="school_select" required="required" >
        			<option disabled>Select a school</option>
        			<?php echo $school_options; ?>
      			</select>
    			</div>
    			<label class="col-lg-2 control-label">Grade</label>
    			<div class="col-lg-2">
      			<select class="form-control btn-default grade_select" name="grade_select" disabled='disabled' required="required" >
        			<optgroup label="Schools">
       				<option disabled>Select a grade</option>
       				<script type='text/javascript'>
      					 // get PHP object into a JSON object
       					 <?php
				         $js_array = json_encode($schools);
				         echo "var schools = ". $js_array . ";\n";
        				 ?>
        				 // When a school is selected, load the appropriate grades and enable grade select
        				 $(".school_select").change(function() {
        			         if (this.value == "") { 
				         $(".grade_select").html("").prop('disabled', true);
        	     			 } else {
        	       			 $(".grade_select").html(schools[this.selectedIndex].grade_options).prop('disabled', false);
        	     			 } });
        	 		</script>
      			</select>
    			</div>
  		</div>
	<hr class="break">
		<div class="form-group">
			<label class="col-lg-3 control-label">Geographical School</label>
  			<div class="col-lg-7">
   				<input type="text" class="form-control" name="geographical_school" placeholder="School name" required="required"  >
  			</div>
		</div>
	</div>
	</div>
  </div>
 </div>
<br/>
<div class="container">
  <div class="col-lg-offset-2 col-lg-8">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Student Information</h3>
		</div>
		</br>
		<div class="form-group">
  			<label class="col-lg-3 control-label">Student Name</label>
  			<div class="col-lg-3">
  	 		 	<input type="text" class="form-control" name="child_firstname" placeholder="First name" required="required"  >
  			</div>
  			<div class="col-lg-4">
    				<input type="text" class="form-control" name="child_lastname" placeholder="Last name" required="required"  >
  			</div>
		</div>
		<hr class='break'>  
		<div class="form-group">
  			<label class="col-lg-3 control-label">Address</label>
  			<div class="col-lg-2">
    				<input type="text" class="form-control" name="student_addr_num" placeholder="#"  required="required"  >
 	 		</div>
  			<div class="col-lg-3">
    				<input type="text" class="form-control" name="student_addr_name" placeholder="Street Name" required="required" >
  			</div>
  			<div class="col-lg-2">
  				<select name="student_addr_type" class="form-control" required="required">
  	  				<option value="NO" selected="selected">Type</option>
  	  				<option value="St.">Street</option>
  	  				<option value="Rd.">Road</option>
  	  				<option value="Ave.">Avenue</option>
  	  				<option value="Dr.">Drive</option>
  	  				<option value="Ct.">Court</option>
  	  				<option value="Ln.">Lane</option>
  	  				<option value="Blvd.">Boulevard</option>
  	  				<option value="Cir.">Circle</option>
  	  				<option value="Pwy.">Parkway</option>
  	  				<option value="Pl.">Place</option>
  				</select>
  			</div>
		</div>
		<div class="form-group">
  			<label class="col-lg-3 control-label"></label>
  			<div class="col-lg-3">
    				<input type="text" class="form-control" name="student_city" placeholder="City"  required="required"  >
  			</div>
  			<div class="col-lg-2">
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
    				<input type="text" class="form-control" name="student_zip" id="zipCode" placeholder="ZIP Code" required="required"  >
  			</div>
		</div>
	</div>
	</div>
</div>
<br/>
<div class="container">
  <div class="col-lg-offset-2 col-lg-8">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Guardian Information</h3>
		</div>
		<br/>
		<div class="form-group">
			<label class="col-lg-3 control-label">Guardian Name</label>
			<div class="col-lg-3">
				<input type="text" class="form-control" name="guardian_firstname" placeholder="First name" required="required"  >
			</div>
			<div class="col-lg-4">
				<input type="text" class="form-control" name="guardian_lastname" placeholder="Last name" required="required"  >
			</div>
		</div>
		<hr class='break'>
		<div class="form-group">
			<label class="col-lg-3 control-label">Phone</label>
			<div class="col-lg-5">
				<input type="tel" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" required="required"  >
			</div>
			<div class="col-lg-2">
				<input type="text" class="form-control" name="phone_ext" placeholder="Ext.">
			</div>  
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label">Email</label>
			<div class="col-lg-7">
				<input type="email" class="form-control" name="email" placeholder="Email" required="required">
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-offset-4 col-lg-5">
				<div class="checkbox">
					<label>
						<input type="checkbox" class="sameAddress" checked="checked">Same address 
					</label>
				</div>
			</div>
		</div>

	<div class="address2">
		<hr class='break'>

		<div class="form-group">
			<label class="col-lg-3 control-label">Guardian Address</label>
			<div class="col-lg-2">
				<input type="text" class="form-control" name="guardian_addr_num" placeholder="#"  >
			</div>
			<div class="col-lg-3">
				<input type="text" class="form-control" name="guardian_addr_name" placeholder="Street Name">
			</div>
			<div class="col-lg-2">
				<select name="guardian_addr_type" class="form-control" required="required">
					<option disabled selected="selected">Type</option>
					<option value="St.">Street</option>
					<option value="Rd.">Road</option>
					<option value="Ave.">Avenue</option>
					<option value="Dr.">Drive</option>
					<option value="Ct.">Court</option>
					<option value="Ln.">Lane</option>
					<option value="Blvd.">Boulevard</option>
					<option value="Cir.">Circle</option>
					<option value="Pwy.">Parkway</option>
					<option value="Pl.">Place</option>
					<option value="Way">Way</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"></label>
			<div class="col-lg-3">
				<input type="text" class="form-control" name="guardian_city" placeholder="City" >
			</div>
			<div class="col-lg-2">
				<select name="guardian_state" class="form-control" > 
					<option disabled selected>State</option> 
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
				<input type="text" class="form-control" name="guardian_zip" id="zipCode2" placeholder="ZIP Code">
			</div>
		</div>	
	</div>
	</div>
</div>
</div>


<div class="col-lg-offset-5 col-lg-5">
  <button type="submit" id="app_submit" class="btn btn-lg btn-primary">
    Submit Application
</button>
</div>
</form>
</div>
</body>
<script src="<?php echo base_url('js/jquery.maskedinput.min.js');?>" type="text/javascript"></script>
<script type="text/javascript">
    $(".address2").hide();
	
	//Text input checkers
	$("#phone_number").mask("(999) 999-9999");
	$("#zipCode").mask("99999");
	$("#zipCode2").mask("99999");

  // Hide address2 (guardian address) when "same" checkbox is checked
  $(".sameAddress").change(function() {
    $(".address2").fadeToggle();
  });
</script>

