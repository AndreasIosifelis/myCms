<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CMS_Controller extends CI_Controller {
    
    private $invalidUserError = "You are not logged in";
    private $invalidClientError = "Invalid Client";
    
    public function __construct() {
        parent::__construct();
        $this->load->model("Menu_model");
        $this->mainMenu = $this->Menu_model->mainMenu();
    }
    
    public function authUser($redirect = true){
        if(!$this->session->userdata("logged_in")){
            if($redirect){
                redirect("user/login");
                die();
            } else {
                $this->errorResponse($this->invalidUserError);
            }            
            
        }            
    }
    
    public function authClient(){
        $input = $this->request();
        if($input->sessionId !== $this->session->userdata("session_id"));
            $this->errorResponse($this->invalidClientError);
    }
    
    public function request($input = "json")
    {
        return json_decode($this->input->post($input));
    }
    
    public function respond($response)
    {
        $this->output->set_header("x-frame-origin:SAMEORIGIN");
        $this->output->set_content_type("application/json");
        echo json_encode($response);
    }
    
    public function errorResponse($error){
        $response["error"] = true;
        $response["alert"] = array($error, $this->session->userdata("session_id"));
        $this->respond($response);
        die();
    }
    
    
    

    
    
}
