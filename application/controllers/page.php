<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends CMS_Controller {

    public function index() {
        
        $this->load->view("page/view");
    }

}
