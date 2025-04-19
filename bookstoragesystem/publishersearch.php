
<?php include 'connection.php';
include 'topnav.php'
?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header"> <h2>Check Record</h2> </div>
<div class="card-body">

<?php
$query = 'SELECT * FROM publisher
              WHERE
              Publisher_ID ='.$_GET['id'].'';
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['Publisher_ID'];
                $i= $row['Publisher_name'];
                $a=$row['Publisher_Address'];
                $b=$row['Author_ID'];

              }
              
              $id = $_GET['id'];
         
?>


                        <form role="form" method="post" action="publisher.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Publisher Name" name="Publisher_name" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Publisher_Address" name="Publisher_Address" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Author ID" name="Author_ID" value="<?php echo $b; ?>">
                            </div> 
                            <button type="submit" class="btn btn-default">Return to main menu</button>
                         <!--   <div class="form-group">
                              <input class="form-control" placeholder="Age" name="age" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="address" value="<?php echo $c; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Phone_no" name="phone no" value="<?php echo $d; ?>">
                            </div> 
                             <div class="form-group">
                              <input class="form-control" placeholder="Email_add" name="email add" value="<?php echo $e; ?>">
                            </div> -->
                            
                         


                      </form>  
                    </div>

                </div>
                
            </div>

            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

