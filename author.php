<?php include 'connection.php';
include 'topnav.php'; ?>

        <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-table"></i>

            Author Records  <a href="authorAdd.php?action=add"  type="button" class="btn btn-xs btn-info fa fa-plus"></a>
            </div> 
           <div class="col-lg-12">

           

          <br> </br>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Author Name</th>
                                        <th>Address</th>
                                        <th>Option</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM author';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['Name'].'</td>';
                            echo '<td>'. $row['Address'].'</td>';
                            
                            echo '<td> <a type="button" class="btn btn-xs btn-info fa fa-search" href="authorsearch.php?action=edit & id='.$row['Author_ID'] . '" >  </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning fa fa-edit" href="authoredit.php?action=edit & id='.$row[     'Author_ID'] . '"></a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger fa fa-trash" href="authordel.php?type=author&delete & id=' . $row['Author_ID'] . '"></a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
                    


<?php include 'footer.php'; ?>