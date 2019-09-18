<?php
class Courses extends CI_Model{

function get_all_courses(){

  $query = $this->db->get('courses');
return $query->result_array();


}

function submit_grades($data){
$query =$this->db->get_where('grades', array('student_id' => $data["student_id"],'course_id' => $data["course_id"]));
    if ($query->num_rows() > 0){
      //  return true;
  //    $this->db->replace('grades',$data);
$record =$this->db->where( array('student_id' => $data["student_id"],'course_id' => $data["course_id"]));
$this->db->update('grades', $data);


    }
    else{
      $this->db->insert('grades',$data);


    }

}
function get_grades($student_id){

$query = $this->db->get_where('grades', array('student_id' => $student_id));
return $query->result_array();

}



}


?>
