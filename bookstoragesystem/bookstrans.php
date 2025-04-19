 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
						$tle= $_POST['Title'];
					    $aid= $_POST['author'];
						$gid= $_POST['genre'];
						$sid= $_POST['shelf_type'];

						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO book
								(Book_ID,Title,Author_ID, Genre_ID, Shelf_ID)
								VALUES (Null,'".$tle."','".$aid."','".$gid."','".$sid."')";
								mysqli_query($db,$query)or die  (mysqli_error($db));
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "books.php";
		</script>
                    </div>