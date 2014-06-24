<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends CMS_Controller {

    public function index($pageId=1) {        
        $this->load->model("Page_model");
        $data["page"] = $this->Page_model->getPage($pageId);
        $this->load->view("page/view", $data);
    }

}
