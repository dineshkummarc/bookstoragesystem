    
<?php include'header.php' ;?>
<?php include'connection.php' ;?>
 <body class="bg-dark">
<div class="card-body">
<div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header">Add New Record</h2> </div>
<div class="card-body">


                        <form role="form" method="post" action="genretrans.php?action=add">
                        
                            <div class="form-group">
                              <input class="form-control" placeholder="Genre" name="Genre">
                            </div>
                             <div class="form-group">
                              <input class="form-control" placeholder="Genre Restriction" name="Genre_Restriction">
                            </div>
                           
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->


    </div>
    </div><?php include 'footer.php'; ?>