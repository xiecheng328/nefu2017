<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this -> load -> model("product_model");
    }
	public function index()
    {
        $results = $this->product_model->get_product();

		$this->load->view('index',array('result'=>$results));
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
