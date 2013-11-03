<?php

class me extends CI_Controller {

   	public function index() {
      if ($this->session->userdata('logged_in')) {
         $session_data = $this->session->userdata('logged_in');
         redirect('me/dashboard', 'refresh');
      } else {
         redirect('login', 'refresh');
      }
	}

	public function getDrinks() {

		// this should be done the good way.
		// I'm not gonna redo it. :P

		function doQuery($query) {
		  $conn = pg_connect("host=dbhost-pgsql.cs.missouri.edu dbname=cs3380f13grp12 user=cs3380f13grp12 password=bZGiwpZu")
		    or die('Could not connect: ' . pg_last_error());
		  $result = pg_query($query) or die('No Query Executed ' . pg_last_error());
		  return $result;
		}
		$query = "SELECT brand FROM project.alcohols group by brand";
		$result = doQuery($query);
		$rows = array();
		while($r = pg_fetch_assoc($result)) {
		    $rows[] = $r['brand'];
		}
		$data['json'] = json_encode($rows);
		$this->load->view('json_view', $data);
	}

	public function logout() {
		$this->session->unset_userdata('logged_in');
		redirect('login', 'refresh');
	}
   
	public function reset_db() {

		// read the file
		$file = $this->load->file('alcohols.sql', true);
		// explode it in an array
		$file_array = explode('\n', $file);
		// execute the exploded text content
		$this->db->query($file);

		// add admin credentials
		$this->load->model('user');
		$this->user->create_account('admin','changeme');
		// go back to dashboard
		$this->load->helper('url');
		redirect(site_url("console/dashboard"), 'refresh');
   	}

 	public function dashboard() {

		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		} else {
			redirect('login', 'refresh');
		}


		$this->db->distinct('alcohol_name');
		$this->db->from('drinky.ratings');
		$this->db->where('username' ,$data['username']);

		$table_data = $this->db->get();

		$data['dashboard']['Drinks'] = $table_data->result();

		$this->load->view('header');
		$this->load->view('me', $session_data);
		$this->load->view('dashboard', $data);


   	}

	public function rate() {

		$brand = $_GET['brand'];
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		} else {
			redirect('login', 'refresh');
		}

		if (isset($_GET['rating'])) {

			$rating = $_GET['rating'];
			$this->db->insert('drinky.ratings', array( 

				'alcohol_name' => $brand,
				'rating' => $rating,
				'username' => $data['username']
		  	));
		}

		$this->db->select('*');
		$this->db->from('drinky.alcohols');
		$this->db->where('brand' ,$brand);
		$table_data = $this->db->get();

		$data['drink'] = $table_data->result();

		$this->db->select_avg('rating');
		$this->db->from('drinky.ratings');
		$this->db->where('alcohol_name', $brand);
		$query = $this->db->get();

		$average_rating = $query->result();
		$data['average_rating'] = $average_rating[0]->rating;

		$this->load->view('header');
		$this->load->view('me', $session_data);
		$this->load->view('rate', $data);
   }





 public function everything() {

      $this->load->view('header');
      $this->load->view('me', $session_data);

      $tables = array( 'user_info', 'alcohols', 'log' );
      foreach ($tables as $table){
         $table_data = $this->db->get('drinky.'.$table);
         $data['dashboard'][$table] = $table_data->result();
      }
      $this->load->view('dashboard', $data);
   }












}
?>