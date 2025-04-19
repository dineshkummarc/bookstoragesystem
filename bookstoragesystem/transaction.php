<?php
include('connection.php');
include('topnav1.php'); 
?>

<body id="page-top">

<!-- Navbar area -->


<div id="wrapper">

<!-- Sidebar area -->


<div id="content-wrapper">
<div class="container-fluid">

<!-- Breadcrumbs-->
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="#">Tables</a>
</li>
<li class="breadcrumb-item active">List of Transaction(s)</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
<div class="card-header">
<i class="fas fa-table"></i>
Transaction(s) Info  <a href="transadd.php" action="add" type="button" class="btn btn-xs btn-info fas fa-plus"></a> </div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>Transaction ID</th> 
<th>Date Stored</th>
<th>Date Claimed</th>
<th>Book</th>
<th>Genre</th>
<th>Shelf Type</th>
<th>Client Name</th>

</tr>
</thead>
<tbody>

<?php                  
$query = 'SELECT a.transaction_id,a.date_stored,a.date_claimed,b.title,a.client_name,g.Genre,s.shelf_type FROM transaction a,book b,genre g,shelf_location s WHERE a.book_title=b.Title and a.genre = g.Genre and a.shelf_type = s.shelf_type';
$result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
while ($row = mysqli_fetch_assoc($result)) {
                                             
echo '<tr>';
echo '<td>'. $row['transaction_id'].'</td>';
echo '<td>'. $row['date_stored'].'</td>';
echo '<td>'. $row['date_claimed'].'</td>';
echo '<td>'. $row['title'].'</td>';
echo '<td>'. $row['Genre'].'</td>';
echo '<td>'. $row['shelf_type'].'</td>';
echo '<td>'. $row['client_name'].'</td>';

echo '</tr> ';
}
?> 
</tbody>
<tfoot>
</tfoot>
</table>
</div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<!-- Footer area -->
<?php
include('footer.php');
?>