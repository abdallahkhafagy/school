<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function __construct($config = 'rest')
	{
	    header('Access-Control-Allow-Origin: *');
	    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	    parent::__construct();
	}
	public function index()
	{


		$this->load->view('Students');
	}

  public function get_student()
	{
$page =  $this->uri->segment(3);
$name  = $this->input->post('name');


if(!$page){
	$page=1;
}

$this->load->model("Students_db","my_st");
$this->load->model("Courses");
$data["students"]=$this->my_st->get_all_students($page,$name);
$data["courses"] = $this->Courses->get_all_courses();
$data['total_rows'] = $this->db->from("students")->count_all_results();
$data['page'] =$page-2;





		$this->load->view('Students2',$data);
	}
	public function submit_grades(){
$student_id = $this->input->post("sid");
foreach($_POST as $key => $value){

	if(strpos($key, "exam_") !== false){

		$splittedstring=explode("_",$key);
		$course_id = $splittedstring[1];

		$work = $this->input->post("work_".$course_id);
		$oral = $this->input->post("oral_".$course_id);
		$exam = $this->input->post($key);

$data =array(
"student_id"=>$student_id,
"course_id"=>$course_id,
"work"=>$work,
"oral"=>$oral,
"exam"=>$exam
);

$this->load->model("Courses");
$this->Courses->submit_grades($data);




}
}
$this->get_student();

	}

	public function get_grades(){
		$student_id = $this->input->post("sid");
		$this->load->model("Courses");
	echo json_encode($this->Courses->get_grades($student_id));


	}
	public function get_student_page(){

		$page  = $this->input->post('page');
		$name  = $this->input->post('name');


	  $this->load->model("Students_db","my_st");
		$this->db->like('name', $name);
		$data['total_rows'] = $this->db->from("students")->count_all_results();


	  $students=$this->my_st->get_all_students($page,$name);
$arr = array(
	"students"=>$students,
	"total_rows"=>	$data['total_rows']
);
	  echo json_encode( $arr);

	}
}
?>
