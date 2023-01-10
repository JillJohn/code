<?php
	require_once('model.php');
	require_once('view.php');


	showHeader();
	$task = $_REQUEST['task'];
	
	if($task == 'new'){
		$rec['first_name'] = '';
		$rec['last_name'] = '';
		$rec['age']= '';
		$rec['gender']= '';
		$rec['email']= '';
		$rec['id'] = -1;
		showStudentForm($rec);
		showHomePage();

	}else if ($task == 'edit'){
		$student_id = $_REQUEST['id'];
		$rs = getStudent($student_id, $rec);
		if($rs){
			showStudentForm($rec);
		}
		showHomePage();
	}else if ($task == 'save'){
		$rec->first_name = $_POST['first_name'];
		$rec->last_name = $_POST['last_name'];
		$rec->age = $_POST['age'];
		$rec->gender = $_POST['gender'];
		$rec->email = $_POST['email'];
		$rec->id = $_POST['id'];
		if($rec->id > 0)
			$rs = updateStudent($rec);
		else
			$rs = saveStudent($rec);
		if($rs)
			echo "Saved ...!";
		else
			echo "Operation failed...!";
		showHomePage();

	}else if ($task == 'remove'){
		$student_id = $_REQUEST['id'];
		$rs = removeStudent($student_id);
		if($rs){
			echo "Removed Successfully...!";
		}else{
			echo "Delete Failed";
		}
		showHomePage();
	}else{
		//Default task

		$students= '';
		$status = getStudents($students);
		if($status)
			printStudents($students);
	}


?>
