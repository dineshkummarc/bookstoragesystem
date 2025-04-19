<?php include('connection.php'); ?>
<?php include('topnav1.php'); ?>

<?php
$query = "SELECT * FROM book";
$result = mysqli_query($db,$query);
?>

<body>
<div class="container">
<div class="card card-login mx-auto mt-5">
<div class="card-header">Please Fill Up</div>
<div class="card-body">
<form role="form" method="post" action="transadd1.php?action=add">
                            
<div class="form-group">
<p>Date Stored:</p>
<input class="form-control" type="Date" placeholder="Date stored" name="ds">
</div>
<div class="form-group">
<p>Date Claimed:</p>
<input class="form-control" type="Date" placeholder="Date claimed" name="dc">
</div> 
<div class="form-group">
<p>Book:</p>
<select class="form-control" name="books">
<?php while($row = mysqli_fetch_array($result)):; ?>
<option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
<?php endwhile; ?>
</select>
</div>
<?php
$query = "SELECT * FROM genre";
$result = mysqli_query($db,$query);
?>
<div class="form-group">
<p>Genre:</p>
<select class="form-control" name="genre">
<?php while($row = mysqli_fetch_array($result)):; ?>
<option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
<?php endwhile; ?>
</select>
</div><?php
$query = "SELECT * FROM shelf_location";
$result = mysqli_query($db,$query);
?>
<div class="form-group">
<p>Genre:</p>
<select class="form-control" name="shelf_type">
<?php while($row = mysqli_fetch_array($result)):; ?>
<option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
<?php endwhile; ?>
</select>
</div>
<button type="submit" class="btn btn-primary btn-block">Save Record</button>
<button type="reset" class="btn btn-primary btn-block">Clear Entry</button>

</form>  
</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
</body>
</html>


<?php
include('footer.php');
?>