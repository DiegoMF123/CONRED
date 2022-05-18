<?php
class Model_Archivo extends CI_Model
{

    public function mostrare($id)
    {
        $this->load->database();
        $query = $this->db->query("

        select * from Documentos where id_documento = '".$id."'
        
        ");
        return $query->result();
    }

    
}
?>