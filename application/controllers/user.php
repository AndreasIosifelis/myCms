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
        $this->authClient();
        $input = $this->request();
        $validClient = $input->sessionId == $this->session->userdata("session_id");
        if(!$validClient){
            $response = array(
                "error"=>true,
                "alert"=> array("Invalid Client")
            );
        } else {
        
            $response = array(
                "error"=>false,
                "success"=> array($input->username, $input->password, $input->sessionId, $validClient)
            );
        }
        
        $this->respond($response);
        
    }

}
