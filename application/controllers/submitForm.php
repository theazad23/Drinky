<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class submitForm extends CI_Controller {

	public function index() {
		
		$this->load->view('header');

		// create table from post for testing
		echo "<div class='container'><br />";
		echo "<div class='col-lg-4'>";
		echo "<h1>Form</h1>";
		echo "<table class='table table-bordered table-condensed table-striped text-sm'>";
    foreach ($_POST as $key => $value) {
        echo "<tr><td>";
        echo $key;
        echo "</td><td>";
        echo $value;
        echo "</td></tr>";
    }	echo "</table></div>";



		// Do checks on data. 
			// Reload form with Errors if errors
		
		// Submit into Database.
    	$this->db->insert('lottery.application', $_POST); 
    	// Holy shit that was easy.

    	$email = $_POST['email'];
    	$number = $_POST['phone_number'];

		// Get verification hash back from database.
		$this->db->select('*');
			$query = $this->db->get_where('lottery.application', array('email' => $email,'phone_number' => $number),1);



		// create table from post for testing
		echo "<div class='col-lg-4'>";
		echo "<h1>DB</h1>";
		echo "<table class='table table-bordered table-condensed table-striped text-sm'>";
    foreach ($query->result() as $key => $value) {
    foreach ($value as $k => $v) {
        echo "<tr><td>";
        echo "$k";
        echo "</td><td>";
        echo "$v";
        echo "</td></tr>";
    	}	
    }	echo "</table></div></div>";

		// Send email with verification code.

		// Tell user that everything went well
			// $this->load->view('success', $authKey);




	}
}

