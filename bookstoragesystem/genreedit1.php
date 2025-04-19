<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$gn = $_POST['Genre'];
			$gr = $_POST['Genre_Restriction'];
		   
			
		
	 			$query = 'UPDATE genre set Genre ="'.$gn.'",Genre_Restriction ="'.$gr.'"
	 				WHERE
					Genre_ID="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "genre.php";
		</script>
 <?php include 'footer.php'; ?>