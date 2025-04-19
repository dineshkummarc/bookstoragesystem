
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<body>
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'shelf_location':
					$query = 'DELETE FROM shelf_location
							WHERE
							Shelf_ID = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "shelflocation.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>