
<?php include 'connection.php';
include 'topnav.php'
?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header"> <h2>Check Record</h2> </div>
<div class="card-body">

<?php
$query = 'SELECT * FROM book
              WHERE
              Book_ID ='.$_GET['id'].'';
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['Book_ID'];
                $i= $row['Title'];
                $a=$row['Author_ID'];
                $b=$row['Genre_ID'];
                $c=$row['Shelf_ID'];

              }
              
              $id = $_GET['id'];
         
?>


                        <form role="form" method="post" action="author.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Title" name="Title" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Author ID" name="Author_ID" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Genre ID" name="Genre_ID" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Shelf ID" name="Shelf_ID" value="<?php echo $a; ?>">
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

