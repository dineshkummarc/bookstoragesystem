<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<?php 
$query = 'SELECT * FROM author
              WHERE
              Author_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['Author_ID'];
                $i= $row['Name'];
                $a=$row['Address'];
                
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12" style="background-image: linear-gradient(gray, #2144);">
                  <h1>Edit Records</h1>
                      <div class="col-lg-6"> 

                        <form role="form" method="post" action="authoredit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Author Name" name="Name" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="Address" value="<?php echo $a; ?>">
                            </div> 

                             <button type="submit" class="btn btn-default">Update Record</button>
                             <br></br>
                           <!-- <div class="form-group">
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
                            </div> 
                            <button type="submit" class="btn btn-default">Update Record</button>
                         


                      </form>  
                    </div>
                    ari di oh!-->
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <?php include 'footer.php'; ?>