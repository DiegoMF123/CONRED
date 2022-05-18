<?php
class Model_Sedes extends CI_Model
{

    public function seleccionarSedes()
    {
        $this->load->database();
        $query = $this->db->query("

        select * from Sedes
        
        ");
        return $query->result();
    }

    
}
?>