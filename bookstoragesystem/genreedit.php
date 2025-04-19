<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<?php 
$query = 'SELECT * FROM genre
              WHERE
              Genre_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['Genre_ID'];
                $gn= $row['Genre'];
                $gr= $row['Genre_Restriction'];
             
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12" style="background-image: linear-gradient(gray,#2144);">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="genreedit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Genre" name="Genre" value="<?php echo $gn; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Genre Restriction" name="Genre_Restriction" value="<?php echo $gr; ?>">
                            </div> 
                             
                            <button type="submit" class="btn btn-default">Update Record</button>
                            <br></br>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <?php include 'footer.php'; ?>