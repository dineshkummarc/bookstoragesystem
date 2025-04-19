<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$tle = $_POST['Title'];
		    $aid = $_POST['Author_ID'];
			$gid= $_POST['Genre_ID'];
			$sid = $_POST['Shelf_ID'];
			
			
		
	 			$query = 'UPDATE book set Title ="'.$tle.'",
					Author_ID ="'.$aid.'", Genre_ID="'.$gid.'",
					Shelf_ID="'.$sid.'" WHERE
					Book_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "books.php";
		</script>
 <?php include 'footer.php'; ?>