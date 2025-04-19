<?php include 'connection.php';
include 'topnav.php'; ?>

            <div class="card mb-3">
            <div class="card-header">

         <div class="col-lg-12">
                       <div>
            <i class="fas fa-table"></i>

            Book Records  <a href="booksadd.php?action=add" type="button" class="btn btn-xs btn-info fa fa-plus"></a>
            </div>   


                        <br> </br>       
                                <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author Name</th>
                                        <th>Genre</th>
                                        <th>Shelf Type</th>
                                        <th>Options</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query =   'SELECT *, a.Name,g.Genre,s.shelf_type
                            FROM book b
                            JOIN author a ON b.Author_ID=a.Author_ID
                            JOIN genre g ON b.Genre_ID=g.Genre_ID
                            JOIN shelf_location s ON b.Shelf_ID=s.Shelf_ID';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['Title'].'</td>';
                            echo '<td>'. $row['Name'].'</td>';
                            echo '<td>'. $row['Genre'].'</td>';
                            echo '<td>'. $row['shelf_type'].'</td>';
                            
                            echo '<td></a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning fa fa-edit" href="booksedit.php?action=edit & id='.$row['Book_ID'] . '"></a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger fa fa-trash" href="booksdel.php?type=book&delete & id='.$row['Book_ID'] . '"> </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                   

                                </tbody>

                            </table>
                            </div>
                            </div>
                        </div>
                        <?php include 'footer.php'; ?>