<?php


 class Mpage extends CI_Model  {
 
  
  function view($num, $offset)  {

  $query = $this->db->get("tb_laundry",$num, $offset);
  return $query->result();
  
  }
 }

?>
