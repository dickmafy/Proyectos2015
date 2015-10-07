<?php
 
/**
* @since July - 2013
* @author: Fernando Porazzi - twitter @fernandoporazzi
* @see http://ellislab.com/codeigniter/user-guide/database/active_record.html
*/
 
/**
* Set the number of posts you want to retrieve from you WP database
* Set the amount of images for every single post
*/
 class Ofertas extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function record_count() {
        return $this->db->count_all("Ofertas");
    }

    public function fetch_countries($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("Ofertas");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
}

?>