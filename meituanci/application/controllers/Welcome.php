<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
    {
		$this->load->view('index');
	}

	public function detail()
    {
        $this -> load -> view('detail');
    }

    public function success()
    {
        $this -> load -> view('success');
    }

}
