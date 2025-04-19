<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Charts</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">
  	
<?php include'header.php' ;?>
<?php include'connection.php' ;?>

<body class="bg-dark">
<div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header">Add new Book</h2> </div>
<div class="card-body">



                        <form role="form" method="post" action="bookstrans.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Book Title" name="Title">
                              </div>
                                  <?php
                                $sqll = "SELECT * FROM `author`";
                                $res = mysqli_query($db,$sqll) or die ("Error: $sqll");

                                $author ="<select class='form-control' name='author' required>
                                            <option value='' disabled selected hidden>Select Author</option>";
                                while($row = mysqli_fetch_assoc($res)){
                                $author .="<option value='".$row['Author_ID']."'>".$row['Name']."</option>";
                                }
                                $author .="</select>";

                          ?>
                            <div class="form-group">
                              <?php echo $author; ?>
                            </div> 
                              
                               <?php
                                $sqll = "SELECT * FROM `genre`";
                                $res = mysqli_query($db,$sqll) or die ("Error: $sqll");

                                $genre ="<select class='form-control' name='genre' required>
                                            <option value='' disabled selected hidden>Select Genre</option>";
                                while($row = mysqli_fetch_assoc($res)){
                                $genre .="<option value='".$row['Genre_ID']."'>".$row['Genre']."</option>";
                                }
                                $genre .="</select>";

                          ?>
                            <div class="form-group">
                              <?php echo $genre; ?>
                            </div> 

                              <?php
                                $sqll = "SELECT * FROM `shelf_location`";
                                $res = mysqli_query($db,$sqll) or die ("Error: $sqll");

                                $shelf_location ="<select class='form-control' name='shelf_type' required>
                                            <option value='' disabled selected hidden>Select Shelf Type</option>";
                                while($row = mysqli_fetch_assoc($res)){
                                $shelf_location .="<option value='".$row['Shelf_ID']."'>".$row['shelf_type']."</option>";
                                }
                                $shelf_location .="</select>";

                          ?>
                            <div class="form-group">
                              <?php echo $shelf_location; ?>
                            </div> 
                            
                           
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

   

  </body>

</html>
