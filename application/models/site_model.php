<?php

/**
 * @ class for custom sQl in db
 * 
 */
class Site_model extends CI_Model{
    /**
     * @method :load menu
     * @param :none
     * @return results
     */
    public function menuloader() {
       $sql="select * from menu order by menu_order asc";
       $results=$this->db->query($sql);
       return $results;
    }
    
    /**
     * @method :submenu loader
     * @param id
     * @return results
     * 
     */
    public function getsubmenu($id) {
        $sql="select distinct submenu_id,submenu_description,menu_description from submenu,menu where 
            menu.menu_id=submenu.menu_id and
            submenu.menu_id='$id' order by submenu_order asc";
        $results=$this->db->query($sql);
        
        return $results;
        
    }
}
?>
