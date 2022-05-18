<?php
class Reportes extends CI_Model
{


  public function reporteDelasSedes(){

    $this->load->database();
    $query = $this->db->query("

    Select * from Sedes

      ");
    return $query->result();

  }

  public function reporteContacto(){

    $this->load->database();
    $query = $this->db->query("

    Select * from Informacion_contacto

      ");
    return $query->result();

  }

  public function reportePersonal(){

    $this->load->database();
    $query = $this->db->query("

    Select * from Personal

      ");
    return $query->result();

  }

}

 ?>
