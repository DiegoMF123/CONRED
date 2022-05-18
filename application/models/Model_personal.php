<?php
class Model_Personal extends CI_Model
{

    public function seleccionarPersonal()
    {
        $this->load->database();
        $query = $this->db->query("

        select * from Personal
        
        ");
        return $query->result();
    }

    
}
?>