<?php

class me extends CI_Controller {

   public function index() {
      
      if ($this->session->userdata('logged_in')) {
         $session_data = $this->session->userdata('logged_in');
      } else {
         redirect('login', 'refresh');
      }
      
         redirect('me/dashboard', 'refresh');
   

     
   }


 public function dashboard() {

      if ($this->session->userdata('logged_in')) {
         $session_data = $this->session->userdata('logged_in');
      } else {
         redirect('login', 'refresh');
      }

      $this->load->view('header');
      $this->load->view('me', $session_data);

      $tables = array( 'user_info', 'alcohols', 'log' );
      foreach ($tables as $table){
         $table_data = $this->db->get('drinky.'.$table);
         $data['everything'][$table] = $table_data->result();
      }
      $this->load->view('dashboard', $data);
   }



 public function everything() {

      if ($this->session->userdata('logged_in')) {
         $session_data = $this->session->userdata('logged_in');
      } else {
         redirect('login', 'refresh');
      }

      $this->load->view('header');
      $this->load->view('me', $session_data);

      $tables = array( 'user_info', 'alcohols', 'log' );
      foreach ($tables as $table){
         $table_data = $this->db->get('drinky.'.$table);
         $data['dashboard'][$table] = $table_data->result();
      }
      $this->load->view('dashboard', $data);
   }



   public function old_dashboard() {
   	
      if ($this->session->userdata('logged_in')) {
         $session_data = $this->session->userdata('logged_in');
         $data['username'] = $session_data->username;
      } else {
         redirect('login', 'refresh');
      }

      $this->load->view('header');
      $this->load->model('testmodel');
      $data['dashboard'] = $this->testmodel->getDashBoard($session_data->username);
      $this->load->view('dashboard', $data);
   }











}
?>