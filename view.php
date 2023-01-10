<?php

function showHeader(){
	echo '<br />';
	echo '<hr />';
	echo "<center>STUDENT MANAGEMENT DEMO</center>";
	echo '<hr />';
}
function showHomePage(){
	echo '<br />';
	echo '<a href="index.php">HOME</a>';
}

function showStudentForm($rec){
	echo '<form action="index.php?task=save" method="post" name="addform">';
	echo 'First Name: <input type="text" name="first_name" value="'.$rec['first_name'].'" />';
	echo 'Last Name: <input type="text" name="last_name" value="'.$rec['last_name'].'" />';
	echo 'Age: <input type="number" name="age" value="'.$rec['age'].'" />';
	echo 'Email: <input type="text" name="email" value="'.$rec['email'].'" />';
	echo '<input type="hidden" name="id" value="'.$rec['id'].'" />';
	echo '<input type="submit" name="submit" value="Save" />';
	echo '</form>';
}



function printStudents($recs){
		echo '<a href="index.php?task=new">New Student</a>';
                echo '<table width="100%" border="1px">';
                echo '<tr><td>First Name</td><td>Last Name</td><td>Age</td><td>Email</td><td>Edit</td><td>Delete</td></tr>';
                foreach($recs as $rec){
                        echo "<tr>";
                        echo "<td>".$rec['first_name']."</td><td>".$rec['last_name']."</td><td>".$rec['age']."</td><td>".$rec['email'].'</td>';
                        echo '<td><a href="index.php?task=edit&id='.$rec['id'].'">Edit</a></td>';
                        echo '<td><a href="index.php?task=remove&id='.$rec['id'].'">Delete</a></td>';
                        echo "</tr>";
                }
                echo "<table>";
        }

?>
