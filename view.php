<?php include ('sess.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
        <!-- Page Content -->
          <!-- Navigation -->
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option value = "candidates/pm.php">Prime Minister</option>
                <option value = "candidates/cm.php">Chief Minister</option>
                <option value = "candidates/mla.php">MLA</option>
                </select>
            </center>

    </heading> 
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <script>
    function page (src){
        window.location=src;
    }
    </script>

</body>

</html>

