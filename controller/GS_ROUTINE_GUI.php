<?php
function getURL($page_name)
	{
		return 'view/'.$page_name.'.php';
	}

class GS_ROUTINE_GUI_Controller{
	function __construct(){
		include('model/DB.php');//database
		$this->obj=new Model();//model class
	}
	
	function home(){
		$this->obj->test_db();
		include(getURL('dashboard'));
		
	}
	function add_new_task(){
		include(getURL('add_new_task'));

	}
	function insert_task(){
		
		echo "<pre>";
		print_r($_POST);
		$task_name=$_POST['task'];
		$this->obj->sql_execute("INSERT INTO `tasks` (`id`, `task_name`) VALUES (NULL, '$task_name')");
		echo "<script>location='index.php?function=home'</script>";
	}
	function insert_slot_task(){
		echo "<pre>";
		print_r($_POST);
		$task_id=$_POST['t_id'];
		$slot_h=$_POST['slot_h'];
		$slot_d=$_POST['slot_d'];
		$this->obj->sql_execute("delete from `slot_task` where slot_h='$slot_h' and slot_d='$slot_d'");

		//$task_name=$_POST['task'];
		//$this->obj->sql_execute("INSERT INTO `tasks` (`id`, `task_name`) VALUES (NULL, '$task_name')");
		//echo "<script>location='index.php?function=home'</script>";
	}
	
	function slot_task(){
		//echo "<pre>";
		//print_r($_GET);
		$tasks=$this->obj->get_tasks();
		include(getURL('slot_task'));
		
	}
}
?>