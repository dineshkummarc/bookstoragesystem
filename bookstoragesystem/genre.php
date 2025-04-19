<?php include 'connection.php';
include 'topnav.php';?>

  <div class="card mb-3">
            <div class="card-header">
           <div class="col-lg-12">
                                 <div> 
            <i class="fas fa-table"></i>

               Genre Records  <a href="genreadd.php?action=add" type="button" class="btn btn-xs btn-info fa fa-plus"></a>
            </div>  <br> </br>
                                
                        <div class="table-responsive">
                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                                    <tr>
                                        <th>Genre</th>
                                        <th>Genre Restriction</th>

                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM genre';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {

                           echo '<tr>';
                           
                            echo '<td>'. $row['Genre'].'</td>';
                            echo '<td>'. $row['Genre_Restriction'].'</td>';
                                             
                            echo '<td> <a type="button" class="btn btn-xs btn-info fa fa-search" href="genresearch.php?action=edit & id='.$row['Genre_ID'] . '" > </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning fa fa-edit" href="genreedit.php?action=edit & id='.$row['Genre_ID'] . '"></a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger fa fa-trash" href="genredel.php?type=genre&delete & id='.$row['Genre_ID'] . '"> </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>

                    <?php include 'footer.php'; ?>

                    