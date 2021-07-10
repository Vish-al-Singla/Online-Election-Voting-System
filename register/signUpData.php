<?php 
    require 'dbcon.php';
								
		if (isset($_POST['save'])){
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$gender=$_POST['gender'];
			$id_number=$_POST['id_number'];
			$age=$_POST['Age'];
			$password = $_POST['password'];
			$password1 = $_POST['password1'];
			$date = date("Y-m-d H:i:s");

			$query = $conn->query("SELECT * FROM ids WHERE id_number='$id_number'") or die ($conn->error);
			$count = $query->fetch_array();
	if ($count  < 1){
?>
	<script>
			alert( 'Invalid Voter ID');
			window.location='index.php';
	</script>		
<?php
	}
	else{
		
		$query = $conn->query("SELECT * FROM voters WHERE id_number='$id_number'") or die ($conn->error);
		$count1 = $query->fetch_array();
		if ($count1 == 0) {
			if ($password == $password1) {
				$conn->query("insert into voters(id_number, password, firstname,lastname, gender,Age,status, date) VALUES('$id_number', '".md5($password)."','$firstname','$lastname', '$gender', '$age','Unvoted', '$date')");
				$conn->query("insert into voters(id_number, password, firstname,lastname, gender,Age,status, date) VALUES('$id_number', '".md5($password)."','$firstname','$lastname', '$gender', '$age','Unvoted', '$date')");
			?>
	            <script>
			        alert( 'Successfully Registered');
			         window.location='../voters.php';
	            </script>
            <?php
			}else{
				?>
	            <script>
			        alert( 'Your Passwords Did Not Match');
			         window.location='index.php';
	            </script>
            <?php
			}
		}else{
			?>
	            <script>
			        alert( 'ID Already Registered');
			         window.location='../voters.php';
	            </script>
            <?php
		}
		

	}
} 
?>


					  