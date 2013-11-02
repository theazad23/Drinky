<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');

class register extends CI_Controller {

   public function index() {
      
      $data['message'] = "Create a admin account";
      if (isset($_POST['username']) && isset($_POST['password'])) {
         $this->load->model('user');
         $this->user->create_account($_POST['username'], $_POST['password']);
         $data['message'] = "Created account " . $_POST['username'];
      }
      $this->load->view('header');
      $this->load->view('create_account', $data);
   }
   

   }

?>