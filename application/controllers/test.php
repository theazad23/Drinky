<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller {

	public function index() {
                
                $this->load->view('header');
        	$this->load->model('testmodel');
                $data['dbspew']['schools'] =            $this->testmodel->getSchools();
                $data['dbspew']['applications'] =       $this->testmodel->getApplications();
                $data['dbspew']['students'] =           $this->testmodel->getStudents();
                $data['dbspew']['waitlists'] =          $this->testmodel->getAllWaitlists();
                $data['dbspew']['lotteries'] =          $this->testmodel->getLotteries();
                $data['dbspew']['applicationNotes'] =   $this->testmodel->getApplicationNotes();
                $this->load->view('test', $data);

	}
}