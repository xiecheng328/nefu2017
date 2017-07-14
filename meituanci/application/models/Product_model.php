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

//        $query = $this->db->get('t_product');
//        return $query->result();

        $sql = "select t_product.*,(select sum(num) num from t_order where t_order.product_id = t_product.product_id) num from t_product";
        return $this->db->query($sql)->result();
    }
}