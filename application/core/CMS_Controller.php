<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CMS_Controller extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        $this->load->model("Menu_model");
        $this->mainMenu = $this->Menu_model->mainMenu();
    }
    
    

    
    
}
