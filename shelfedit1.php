<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$st = $_POST['shelf_type'];
		   
			
		
	 			$query = 'UPDATE shelf_location set shelf_type ="'.$st.'"
	 				WHERE
					Shelf_ID="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "shelflocation.php";
		</script>
 <?php include 'footer.php'; ?>