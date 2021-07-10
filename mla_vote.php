<?php include ('head.php');?>
<?php include("sess.php");?>
<body>
	<?php include 'side_bar.php'; ?>
    <div id="wrapper">
    </div>
	<form method = "POST" action = "mla_vote_result.php">
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading" style="background-color: #166961;">
			<center>MLA</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'MLA'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Age: </strong> ".$fetch['Age']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
						<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "mla_id" class = "mla">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

     <hr/>
		
		<center><button class = "btn btn-success ballot" type = "submit" name = "submit" style="background-color: #166961;">Submit Ballot</button></center>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</form>
</body>
<?php include ('script.php');
include ('footer.php');?>
  
  <script type = "text/javascript">
		$(document).ready(function(){
			
			$(".mla").on("change", function(){
				if($(".mla:checked").length == 1)
					{
						$(".mla").attr("disabled", "disabled");
						$(".mla:checked").removeAttr("disabled");
					}
				else
					{
						$(".mla").removeAttr("disabled");
					}
			});
			
		});	
	</script>
</html>

