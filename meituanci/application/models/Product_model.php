<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/7/14
 * Time: 上午8:58
 */
class Product_model extends CI_Model
{
    public function get_product(){
        //.....
//        $sql = 'select * from t_product';

        $query = $this->db->get('t_product');
        return $query->result();
    }
}