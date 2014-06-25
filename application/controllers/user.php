<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CMS_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("User_model");
    }

    public function profile() {
        $this->authUser();
        
        
    }
    
    public function login(){        
        $data["page"]["title"] = "Login / Register";        
        $this->load->view("user/login", $data);
        
    }

}
