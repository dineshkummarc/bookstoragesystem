<?php include 'connection.php';
include 'topnav1.php'; ?>

            <div class="card mb-3">
            <div class="card-header">

         <div class="col-lg-12">
                       <div>
            <i class="fas fa-table"></i>

            Book Records
            </div>   


                        <br> </br>       
                                <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author Name</th>
                                        <th>Genre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query =   'SELECT *, a.Name,g.Genre
                            FROM book b
                            JOIN author a ON b.Author_ID=a.Author_ID
                            JOIN genre g ON b.Genre_ID=g.Genre_ID';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['Title'].'</td>';
                            echo '<td>'. $row['Name'].'</td>';
                            echo '<td>'. $row['Genre'].'</td>';
                            echo '</tr> ';
                }
            ?> 
                                   

                                </tbody>

                            </table>
                            </div>
                            </div>
                        </div>
                        <?php include 'footer.php'; ?>