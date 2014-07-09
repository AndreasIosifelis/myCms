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
    
    public function doLogin(){
        /*echo json_encode(
                    array(
                        "error"=>false,
                        "info"=>array("Info1", "Info2", "Info3")
                        )
                );
        
                echo json_encode(
                    array(
                        "error"=>false,                        
                        "success"=>array("Success1", "Success2", "Success3")
                        )
                );*/
        
                echo json_encode(
                    array(
                        "error"=>true,                        
                        "alert"=>array("Error1", "Error2", "Error3")                        
                        )
                );
        
    }

}
