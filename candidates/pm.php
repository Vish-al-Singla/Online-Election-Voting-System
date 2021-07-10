
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
              <?php include ('view_banner.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">

    <heading class="voters_heading">
        <center><h1>Registered Prime Minister Candidates</h1>
             <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option disabled selected>Prime Minister</option>
                <option value = "cm.php">Chief Minister</option>
                <option value = "mla.php">MLA</option>
                </select>
            </center>

    <script>
        function page (src){
            window.location=src;
    }
    </script>
<p/>

    </heading>
            <div class="row">
				
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" border="0">

                                    <thead class="thead">                                    	
                                   
                                         <tr>
                                            <th>Image</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Party</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                                
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <tr>
										<?php 
											require '../admin/dbcon.php';
											$bool = false;
											$query = $conn->query("SELECT * FROM candidate WHERE `position` = 'Prime Minister'");
												while($row = $query->fetch_array()){
													$candidate_id=$row['candidate_id'];
										?>
											
											<td width="50"><img src="../admin/<?php echo $row['img']; ?>" width="50" height="50" class="img-rounded"></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td><?php echo $row ['party'];?></td>
                                            <td><?php echo $row ['Age'];?></td>
                                            <td><?php echo $row ['gender'];?></td>
                                        </tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->



              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <?php include ('script.php');?>



</body>

</html>

