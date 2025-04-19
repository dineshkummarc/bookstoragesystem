<?php include 'connection.php';
include 'topnav.php'; ?>

            <div class="card mb-3">
            <div class="card-header">
             <div class="col-lg-12">
                        <div>
            <i class="fas fa-table"></i>

               Publisher Records  <a href="publisheradd.php?action=add" type="button" class="btn btn-xs btn-info fa fa-plus"></a>
            </div>    

                 <br> </br>      
                        
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Publisher Name</th>
                                        <th>Publisher Address</th>
                                        <th>Author ID</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM publisher';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['Publisher_name'].'</td>';
                            echo '<td>'. $row['Publisher_Address'].'</td>';
                            echo '<td>'. $row['Author_ID'].'</td>';
                            echo '<td> <a type="button" class="btn btn-xs btn-info fa fa-search" href="publishersearch.php?action=edit & id='.$row['Publisher_ID'] . '" > </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning fa fa-edit" href="publisheredit.php?action=edit & id='.$row['Publisher_ID'] . '"> </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger fa fa-trash" href="publisherdel.php?type=publisher&delete & id='.$row['Publisher_ID'] . '"> </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                        <?php include 'footer.php'; ?>