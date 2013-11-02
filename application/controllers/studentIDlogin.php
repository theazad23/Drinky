<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class studentIDlogin extends CI_Controller {

        public function index() {

                $this->load->view('header');

                if (isset($_POST["student_num"])) {

                        $this->load->helper('url');

                        redirect('app_form', 'refresh');

                        // $this->load->helper('url');
                        // Verify usrname and pass against DB
                        // redirect('console', 'refresh'); // If Win

                        // $this->load->view('login', $error); // If Fail

                } else {
                        // Load the login page
                        $this->load->view('studentIDlogin');
                }
        }
}

/* End of file student.php */
/* Location: ./application/controllers/student.php */

