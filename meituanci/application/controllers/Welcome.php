<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this -> load -> model("product_model");
        $this -> load -> model("order_model");
    }
	public function index()
    {
        $results = $this->product_model->get_product();

        //[1,2,3];
        // like
        //[5,0,3]
//
//        foreach ($results as $product){
//            $product->num = $product->num == null?0:$product->num;
//        }

//
//        foreach ($results as $product){
//            //在order表通过product_id查询记录条数
//            $num = $this->order_model->get_count_by_product_id($product->product_id);
////            if($num->num == null){
////                $product->num = 0;
////            }else{
////                $product->num = $num->num;
////            }
//            $product->num = $num->num == null?0:$num->num;
//
//        }


        //var_dump($results[0]->product_id);

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
