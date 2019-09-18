<?php
class Students_db extends CI_Model{

function get_all_students($page,$name){
  $this->db->like('name', $name);

  $query = $this->db->get('students',6,($page-1)*6);
  //var_dump( $query->result_array());
return $query->result_array();


}




}


?>
