<?php
class Model_Contacto extends CI_Model
{

    public function seleccionarContacto()
    {
        $this->load->database();
        $query = $this->db->query("

        select * from Informacion_contacto
        
        ");
        return $query->result();
    }

    
}
?>