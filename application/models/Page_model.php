<?php

class Page_model extends CI_Model {
    
    public function getPage($pageId){
        
        $this->db->where("pageId", $pageId);
        $this->db->limit(1);
        $query = $this->db->get("pages");
        $page = $query->result();
        return $page[0];
        
    }
    
}
