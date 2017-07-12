<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function check_username()
    {
        $username = $this -> input -> post("username");
        $this -> load -> model("user_model");
        $row = $this -> user_model -> check_username($username);
        if($row){
            echo "no";
        }else{
            echo "yes";
        }
	}

	public function register()
    {
        $username = $this -> input -> post("username");
        $password = $this -> input -> post("password");
        $this -> load -> model("user_model");
        $num = $this -> user_model -> insert_user($username, $password);
        if($num > 0){//插入成功
            redirect("welcome/login_page");
        }
    }

}
