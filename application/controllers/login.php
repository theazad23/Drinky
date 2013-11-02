
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

 function index() {
   $this->load->helper(array('form'));
   $this->load->view('header');
   $this->load->view('login');
 }

}

?>

