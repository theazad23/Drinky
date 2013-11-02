<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class console extends CI_Controller {
   
   public function index() {
      
      if ($this->session->userdata('logged_in')) {
         $session_data     = $this->session->userdata('logged_in');
         $data['username'] = $session_data['username'];
         $this->load->helper('url');
         redirect(site_url("console/dashboard"), 'refresh');
      } else {
         redirect('login', 'refresh');
      }
   }
   
   function logout() {
      $this->session->unset_userdata('logged_in');
      redirect('login', 'refresh');
   }
   
   public function create_account() {
      
      $data['message'] = "Create a admin account";
      if (isset($_POST['username']) && isset($_POST['password'])) {
         $this->load->model('user');
         $this->user->create_account($_POST['username'], $_POST['password']);
         $data['message'] = "Created account " . $_POST['username'];
      }
      $this->load->view('header');
      $this->load->view('console', $session_data);
      $this->load->view('create_account', $data);
   }
   
   // TESTING ONLY ---------------------------------------------------------------------
   
   public function dashboard() {
      if ($this->session->userdata('logged_in')) {
         $session_data = $this->session->userdata('logged_in');
      } else {
         redirect('login', 'refresh');
      }

      $this->load->view('header');
      $this->load->view('console');

      $tables = array( 'user_info', 'alcohols', 'log' );
      foreach ($tables as $table){
         $table_data = $this->db->get('drinky.'.$table);
         $data['everything'][$table] = $table_data->result();
      }
      $this->load->view('dashboard', $data);
   }
   
   public function reset_db() {
      //read the file
      $file       = $this->load->file('booze.sql', true);
      //explode it in an array
      $file_array = explode('\n', $file);
      //execute the exploded text content
      foreach ($file_array as $query) {
         $this->db->query($query);
      }

      // add admin credentials

      $this->load->model('user');
      $this->user->create_account('admin','changeme');

      // go back to dashboard
      $this->load->helper('url');
      redirect(site_url("console/dashboard"), 'refresh');
   }
   
   public function bullshit() {
      //read the file
      $file       = $this->load->file('bullshit.sql', true);
      //explode it in an array
      $file_array = explode('\n', $file);
      //execute the exploded text content
      foreach ($file_array as $query) {
         $this->db->query($query);
      }
      // go back to dashboard
      $this->load->helper('url');
      redirect(site_url("console/dashboard"), 'refresh');
   }
   
   // ----------------------------------------------------------------------------------
   
   
   public function waitlists() {
      
      // authenticate session
      if ($this->session->userdata('logged_in')) {
         $session_data = $this->session->userdata('logged_in');
      } else {
         redirect('login', 'refresh');
      }
      // Instantiate school list
      $this->load->model('testmodel');
      $schools       = $this->testmodel->getSchools();
      $waitlist      = "";
      $grade_options = "";
      $waitlist      = "";
      
      // if a school has been selected, get grades for that school.
      if (isset($_GET['school'])) {
         $grades        = $this->testmodel->getGrades($_GET['school']);
         $school_id     = $_GET['school'];
         $grade_options = "";
         foreach ($grades as $g => $grade) {
            $grade_options .= "<li> <a href='?school=$school_id&grade=$grade->grade'>" . $grade->grade . "</a></li>";
         }
         
         // If a grade has been selected, get the wait lists.
         if (isset($_GET['grade'])) {
            $query    = $this->testmodel->getWaitlists($_GET['school'], $_GET['grade']);
            $waitlist = "";
            foreach ($query as $value) {
               $waitlist .= "<tr>";
               foreach ($value as $k => $v) {
                  $waitlist .= "<td>$v</td>";
               }
               $waitlist .= "</tr>";
            } // end for each
         }
      }
      
      $school_options = "";
      // Make select lists for each school and grade
      foreach ($schools as $s => $school) {
         $school_options .= "<li> <a href='?school=$school->school_id'>" . $school->school_name . "</a></li>";
      }
      
      // Put everything into the view obj
      $data['school_options'] = $school_options;
      $data['grade_options']  = $grade_options;
      $data['waitlist']       = $waitlist;
      
      // load views
      $this->load->view('header');
      $this->load->view('console', $session_data);
      $this->load->view('waitlist', $data);
      
   }
   
   
   public function lottery() {
      
      // authenticate session
      if ($this->session->userdata('logged_in')) {
         $session_data = $this->session->userdata('logged_in');
      } else {
         redirect('login', 'refresh');
      }
      
      $this->load->model('testmodel');
      $schools       = $this->testmodel->getSchools();
      $grade_options = "";
      
      // Make select lists for each school and grade
      foreach ($schools as $s => $school) {
         
         $school->grades = (object) $this->testmodel->getGrades($school->school_id);
         foreach ($school->grades as $grade) {
            $grade->applicants = count($this->testmodel->getApplications($school->school_name, $grade->grade));
         }
         
      }
      
      $data['schools'] = $schools;
      $this->load->view('header');
      $this->load->view('console', $session_data);
      $this->load->view('lottery', $data);
      
   }
   
   public function app_form() {
      
      // authenticate session
      if ($this->session->userdata('logged_in')) {
         $session_data = $this->session->userdata('logged_in');
      } else {
         redirect('login', 'refresh');
      }
            
      // change model
      $this->load->model('testmodel');
      $schools = $this->testmodel->getSchools();
      foreach ($schools as $school) {
         $school->grades = $this->testmodel->getGrades($school->school_id);
      }
      $data['schools'] = $schools;
      $this->load->view('header');
      $this->load->view('console', $session_data);
      $this->load->view('app_form', $data);
      
   }
   
   public function configure() {
      
      // authenticate session
      if ($this->session->userdata('logged_in')) {
         $session_data = $this->session->userdata('logged_in');
      } else {
         redirect('login', 'refresh');
      }
      
      $this->load->model('testmodel');
      $data['schools'] = $this->testmodel->getSchools();
      $this->load->view('header');
      $this->load->view('console', $session_data);
      $this->load->view('configure', $data);
   }
   
   public function add_school() {
      
      // authenticate session
      if ($this->session->userdata('logged_in')) {
         $session_data = $this->session->userdata('logged_in');
      } else {
         redirect('login', 'refresh');
      }
      
      $this->load->model('testmodel');
      $done = $this->testmodel->addSchool();
      // go back to configure
      $this->load->helper('url');
      redirect(site_url("console/configure"), "refresh");
      
   }
   
}











