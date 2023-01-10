<html>
	        <link href="code.css" rel="stylesheet" type="text/css"/>

	<body>

<?php

function showHeader(){
	echo '<br />';
	echo '<div class = "head">';
	echo '<hr />';
	echo "<center>STUDENT MANAGEMENT DEMO</center>";
	echo '<hr />';
	echo '</div>';
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

	echo '<label for="gender">Gender</label>
		  <select name="gender" id="gender">
	  	  <option value="male">Male</option>
	      <option value="female">Female</option>
	      <option value="others">Others</option>
	      </select>';

	echo 'Email: <input type="text" name="email" value="'.$rec['email'].'" />';

	echo '<input type="hidden" name="id" value="'.$rec['id'].'" />';
    
	echo '<input type="submit" name="submit" value="Save" />';
	
	echo '</form>';
}



function printStudents($recs){
	    echo " ";
		echo " ";
	    echo '<div class = addstudent>';
		
		echo '<a href="index.php?task=new">New Student</a>';
		echo '</div>';
		echo "<br>";
		echo "<br>";
                echo '<table width="70%" height="50%" border="2	px">';
                echo '<tr>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Age</td>
				<td>Gender</td>
				<td>Email</td>
				<td><a class="button primary edit">Edit</a></td>
				<td><a class="button primary delete">Delete</a></td>
				</tr>';

                foreach($recs as $rec){
                        echo "<tr>";
                        echo "<td>".$rec['first_name']."</td>
							  <td>".$rec['last_name']."</td>
						      <td>".$rec['age']."</td>
							  <td>".$rec['gender']."</td>
						      <td>".$rec['email'].'</td>';

						echo '<div class = change>';	  
                        echo '<td><a href="index.php?task=edit&id='.$rec['id'].'">Edit</a></td>';
                        echo '<td><a href="index.php?task=remove&id='.$rec['id'].'">Delete</a></td>';
						echo '</div';
                        echo "</tr>";

                }
                echo "<table>";
        }

?>

	</body>

</html>
