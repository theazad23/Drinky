<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_form extends CI_Controller {
	public function index() {

    	$this->load->model('testmodel');
        $schools = $this->testmodel->getSchools();
        foreach($schools as $school) {
        	$school->grades = $this->testmodel->getGrades($school->school_id);
        }
        $data['schools'] = $schools;
		$this->load->view('header');
		$this->load->view('app_form', $data);
	}
}


