<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<?php 
$query = 'SELECT * FROM publisher
              WHERE
              Publisher_ID ='.$_GET['id'];
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

             <div class="col-lg-12" style="background-image: linear-gradient(gray, #2114);">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="publisheredit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Publisher name" name="Publisher_name" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Publisher Address" name="Publisher_Address" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Author ID" name="Author_ID" value="<?php echo $b; ?>"></div>
                               <button type="submit" class="btn btn-default">Update Record</button>
                               <br></br>
                            <!--</div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Date_of_Birth" name="dateofbirth" value="<?php echo $c; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Date_of_Death" name="dateofdeath" value="<?php echo $d; ?>">
                            </div> 
                             
                            <button type="submit" class="btn btn-default">Update Record</button>
                         -->


                      </form>  
                    </div>
                </div>
                
            </div>

            <!-- /.container-fluid -->

        </div>
        <?php include 'footer.php'; ?>